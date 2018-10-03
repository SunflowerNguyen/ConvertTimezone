<?php
namespace DuyVuSeldat\ConvertTimeZone;

use Illuminate\Support\ServiceProvider;

class ConvertTimezoneServiceProvider extends ServiceProvider{

    public function register()
    {
        $this->app->bind('convert-timezone', function ($app) {
            return new ConvertTimeZone;
        });
    }

}