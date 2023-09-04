<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        View::composer('*', function ($view) {
            $view->with([
                "music_link" => "https://cloud.ryzendesu.com/api/raw/?path=/Media/music/7!!-Orange_(Instrumental).mp3",
                "email" => "ryzen@ryzendesu.com",
                "facebook" => "https://www.facebook.com/Nao.Tomori.UwU",
                "instagram" => "https://www.instagram.com/ryzen_vermillion",
                "github" => "https://github.com/ShirokamiRyzen",
            ]);
        });
    }
}
