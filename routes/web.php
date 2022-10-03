<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/logout', 'App\Http\Controllers\HomeController@logout')->name('logout');
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/profile', 'App\Http\Controllers\UserProfileController@index')->name('profile');
Route::get('/profile.update', 'App\Http\Controllers\UserProfileController@index')->name('profile.update');
Route::get('/home2', 'App\Http\Controllers\HomeController@index')->name('rtl');
Route::get('/home3', 'App\Http\Controllers\HomeController@index')->name('profile-static');
Route::get('/login', 'App\Http\Controllers\LoginController@show')->name('sign-in-static');
Route::get('/home5/{page}', 'App\Http\Controllers\HomeController@index')->name('page');
Route::get('/home6', 'App\Http\Controllers\HomeController@index')->name('virtual-reality');
Route::get('/home7', 'App\Http\Controllers\HomeController@index')->name('sign-up-static');
Route::get('/home8', 'App\Http\Controllers\HomeController@index')->name('register');
Route::get('/home9', 'App\Http\Controllers\HomeController@index')->name('login');
Route::get('/home10', 'App\Http\Controllers\HomeController@index')->name('login.perform');
Route::get('/home11', 'App\Http\Controllers\HomeController@index')->name('reset-password');
