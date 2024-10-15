<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Share the menu with all views
        View::composer('*', function ($view) {
            // Load the menu from the JSON file
            $menu = json_decode(Storage::get('menu.json'), true);

            // Share the menu variable with all views
            $view->with('menu', $menu);
        });
    }
}