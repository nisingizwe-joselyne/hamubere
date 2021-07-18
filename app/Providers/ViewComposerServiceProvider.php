<?php

namespace App\Providers;
use Cart;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // View::composer('layouts.base', function ($view) {
        //     $view->with('cartCount', Cart::Content()->count());
        // });
    }
}
