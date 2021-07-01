<?php

namespace HoangPhi\HwaHelpers\Providers;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\ServiceProvider;

class HwaHelperServiceProvider extends ServiceProvider
{
    /**
     * Register hwa helpers services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/hwa_helpers.php', 'hwa_helpers');
    }

    /**
     * Bootstrap hwa helpers services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'hwa_helpers');

        $this->publishes([
            __DIR__ . '/../../config/hwa_helpers.php' => config_path('hwa_helpers.php')
        ], 'hwa_helpers');

        $this->app->booted(function () {
            date_default_timezone_set(config('hwa_helpers.timezone'));
            $this->app->setLocale(config('hwa_helpers.locale'));

            Artisan::call('optimize:clear');
        });
    }
}



