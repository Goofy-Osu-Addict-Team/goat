<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;

class DiscordController extends Controller
{
    private function getAccessTokenData($code) {
        $tokenURL = "https://discord.com/api/oauth2/token";
        $tokenData = [
            "client_id" => config('discord.client_id'),
            "client_secret" => config('discord.client_secret'),
            "grant_type" => "authorization_code",
            "code" => $code,
            "redirect_uri" => config("discord.redirect_uri"),
            "scope" => "identifiy&email&guilds"
        ];

        $client = new Client();

        try {
            $accessTokenData = $client->post($tokenURL, ["form_params" => $tokenData]);
            $accessTokenData = json_decode($accessTokenData->getBody());
        } catch (ClientException $e) {
            return redirect()->route('homepage');
        }

        return $accessTokenData;
    }

    private function getUserData($accessTokenData) {
        $url = "https://discord.com/api/users/@me";

        $userData = Http::withToken($accessTokenData->access_token)->get($url);
        
        if ($userData->clientError() || $userData->serverError()) return redirect()->route('homepage');

        return json_decode($userData);
    }

    private function getUserGuilds($accessTokenData) {
        $url = "https://discord.com/api/users/@me/guilds";

        $userGuilds = Http::withToken($accessTokenData->access_token)->get($url);

        if ($userGuilds->clientError() || $userGuilds->serverError()) return redirect()->route('homepage');

        return json_decode($userGuilds);
    }

    public function login(Request $request) { 
        if (Auth::check()) return redirect()->route('homepage');
        if ($request->missing("code")) return redirect()->route('homepage');
    
        $accessTokenData = $this->getAccessTokenData($request->get('code'));

        $userData = $this->getUserData($accessTokenData);
        $userGuilds = $this->getUserGuilds($accessTokenData);

        $in_server = false;
        foreach ($userGuilds as $guild) {
            if ($guild->id == "1263728687522512958") // GOAT server
            {
                $in_server = true;
                break;
            }
        }

        $user = User::updateOrCreate([
            'id' => $userData->id,
        ],
        [
            'username' => $userData->username,
            'discriminator' => $userData->discriminator,
            'email' => $userData->email,
            'avatar' => $userData->avatar,
            'verified' => $userData->verified,
            'locale' => $userData->locale,
            'mfa_enabled' => $userData->mfa_enabled,
            'refresh_token' => Crypt::encryptString($accessTokenData->refresh_token),
            'in_server' => $in_server,
        ]);

        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->route('homepage');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();

        return redirect()->route('homepage');
    }
}
