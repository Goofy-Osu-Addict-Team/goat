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
    protected $tokenURL = "https://discord.com/api/oauth2/token";
    protected $apiURLBase = "https://discord.com/api/users/@me";
    protected $tokenData = [
        "client_id" => NULL,
        "client_secret" => NULL,
        "grant_type" => "authorization_code",
        "code" => NULL,
        "redirect_uri" => NULL,
        "scope" => "identifiy&email&guilds"
    ];

    public function login(Request $request) { 
        // Auth guard
        if (Auth::check()) return redirect()->route('homepage');

        // Request guard
        if ($request->missing("code")) return redirect()->route('homepage');

        $this->tokenData["client_id"] = config('discord.client_id');
        $this->tokenData["client_secret"] = config('discord.client_secret');
        $this->tokenData["code"] = $request -> get("code");
        $this->tokenData["redirect_uri"] = config("discord.redirect_uri");

        // Access token exchange
        $client = new Client();

        try {
            $accessTokenData = $client->post($this->tokenURL, ["form_params" => $this->tokenData]);
            $accessTokenData = json_decode($accessTokenData->getBody());
        } catch (ClientException $e) {
            return redirect()->route('homepage');
        }

        $userData = Http::withToken($accessTokenData->access_token)->get($this->apiURLBase);
        
        if ($userData->clientError() || $userData->serverError()) return redirect()->route('homepage');

        $userData = json_decode($userData);

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
