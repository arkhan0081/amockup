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

Route::get('/','FrontEndController@home')->name('home');
Route::get('/contact-us','FrontEndController@contact')->name('contact');
Route::post('/SendMail','FrontEndController@SendMail')->name('contactUs');

Route::post('test', 'HomeController@test');

Route::get('/settings', 'SettingController@show')->name('settings.show');
Route::post('update-settings', 'SettingController@update')->name('settings.update');


Auth::routes();
Auth::routes(['register' => false]);
Route::resource('pages','PageController');
Route::get('/home', 'HomeController@index')->name('index');

