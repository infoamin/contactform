<?php

namespace infoamin\contactform;

use Illuminate\Support\ServiceProvider;

class ContactFormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
         $this->loadRoutesFrom(__DIR__.'/routes/web.php');
         $this->loadViewsFrom(__DIR__.'/resources/views', 'contactform');
         $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
