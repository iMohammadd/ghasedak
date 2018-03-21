<?php

namespace Aries\Ghasedak;

use Illuminate\Support\ServiceProvider;

class GhasedakServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/ghasedak.php'    =>  config_path('ghasedak.php')
        ], 'config');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/ghasedak.php', 'ghasedak'
        );
    }
}
