<?php


namespace Church\LaravelSms;

use Overtrue\EasySms\EasySms;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $this->publishes([__DIR__.'/config.php' => config_path('sms.php')], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config.php', 'sms');

        $this->app->singleton('sms', function() {
            return new EasySms(config('sms'));
        });

        $this->app->alias('sms', EasySms::class);
    }
}
