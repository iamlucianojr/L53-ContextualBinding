<?php

namespace App\Providers;

use App\Http\Controllers\FoobarController;
use App\Http\Controllers\SomeC;
use App\Http\Controllers\SomeI;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when(FoobarController::class)->needs(SomeI::class)->give(SomeC::class);
    }
}
