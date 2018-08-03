<?php

namespace App\Providers;

use function foo\func;
use Validator;
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
        Validator::extend('cellphone', function($attribute, $value, $parameters){
            return !!preg_match('/^1[3|4|5|7|8]\d{9}$/', $value);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
