<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/** 页面路由 */
Route::get('/', 'PagesController@root')->name('root');

/** 认证路由 */
Route::get('login','Auth\AuthenticateController@login')->name('login');
Route::post('logout','Auth\AuthenticateController@logout')->name('logout');

/** 资源路由 */
Route::resource('applicant', 'ApplicantsController');