<?php

namespace App\Providers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Vite::prefetch(concurrency: 3);

        // force secure and prevent naked ip
        URL::forceScheme('https');
        URL::forceRootUrl(Config::get('app.url'));

        // super admin registration
        Gate::before(function ($user, $ability) {
            return $user->hasRole('super.admin') ? true : null;
        });
    }
}
