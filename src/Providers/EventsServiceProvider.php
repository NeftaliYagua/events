<?php

namespace LaravelSchema\Events;

use Illuminate\Support\ServiceProvider;

class EventsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/events.php' => config_path('events.php'),
        ]);
    }
    public function register()
    {
        
    }
}