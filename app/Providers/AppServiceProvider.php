<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Cookie;
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
        View::composer('*', 'App\Http\View\Composers\MenuComposer');
        
        view()->composer('layouts.app', function ($view) {
            $theme = Cookie::get('theme');
            if ($theme != 'dark' && $theme != 'light') {
                $theme = 'light';
            }
        
            $view->with('theme', $theme);
        });
    }
}
