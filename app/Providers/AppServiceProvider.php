<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Termwind\Components\Dd;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if(config('app.env') == 'prod') {
            \URL::forceScheme('https');
        }
    }
}
