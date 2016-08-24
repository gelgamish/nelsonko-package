<?php

namespace Arbitrium\Lend;

use Illuminate\Support\ServiceProvider;

class LendServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/routes.php';

        $this->loadViewsFrom(__DIR__ . '/Views', 'lend');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['lend'] = $this->app->share(function ($app) {
            return new Lend;
        });
    }
}
