<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\DesignPatterns\Facade\Fish;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        app()->bind('fish', function () {
            return new Fish();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
