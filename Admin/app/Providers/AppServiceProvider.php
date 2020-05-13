<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\ProfileServices\Profile\profileInterface', 'App\ProfileServices\Profile\profileImplementation');
    
        $this->app->bind('App\AccountServices\Account\accountInterface', 'App\AccountServices\Account\accountImplementation');
    }

}
