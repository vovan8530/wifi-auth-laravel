<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


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
//Location
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/auth', 'RegisterController@index')->name('auth');
});

Auth::routes();

//Admin
Route::prefix('/admin/{key}')->middleware('admin')->namespace('Admin')->name('admin.')->group(function(){
    Route::get('/', 'UsersController@index')->name('users');
    Route::get('/settings', 'SettingsController@index')->name('settings.index');
    Route::post('/settings/update', 'SettingsController@updateValue')->name('settings.updateValue');
});

// Auth
Route::post('/auth/create-user', 'RegisterController@createUser')->name('create-user');

// Social Auth
Route::get('/social-auth/{provider}/callback', 'SocialAuthController@handleProviderCallback')->name('auth.social.callback');
Route::get('/social-auth/{provider}', 'SocialAuthController@redirectToProvider')->name('auth.social');

//Export CSV File
Route::get('csv_file/export', 'CsvFileController@export')->name('export');



