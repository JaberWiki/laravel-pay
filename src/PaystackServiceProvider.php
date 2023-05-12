<?php

/*
 * This file is part of the Laravel Paystack package.
 *
 * (c) Mohammad Jaber
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JaberWiki\Paystack;

use Illuminate\Support\ServiceProvider;

class PaystackServiceProvider extends ServiceProvider
{

    /*
    * Indicates if loading of the provider is deferred.
    *
    * @var bool
    */
    protected $defer = false;

    /**
    * Publishes all the config file this package needs to function
    */
    public function boot()
    {
        $config = realpath(__DIR__.'/../resources/config/paystack.php');

        $this->publishes([
            $config => config_path('paystack.php')
        ]);
    }

    /**
    * Register the application services.
    */
    public function register()
    {
        $this->app->bind('laravel-pay', function () {

            return new Paystack;

        });
    }

    /**
    * Get the services provided by the provider
    * @return array
    */
    public function provides()
    {
        return ['laravel-pay'];
    }
}
