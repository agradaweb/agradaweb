<?php

namespace App\Providers;

use App\Models\Option;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;



class OptionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', fn ($view) => $view->with('options', Option::all()->keyBy('key')));
    }
}
