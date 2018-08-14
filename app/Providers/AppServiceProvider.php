<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
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
        Validator::extend('gender', function($attribute, $value, $parameters){
            return $value == '男' || $value == '女';
        });

        \App\Models\Applicant::observe(\App\Observers\ApplicantObserver::class);

        Carbon::setLocale('zh');
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
