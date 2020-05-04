<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactMail;

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



Auth::routes();
Route::get('home', 'HomeController@index')->name('home');

Route::resource('/', 'MainController');
Route::resource('contact', 'ContactController');
Route::resource('admin', 'AdminController');
Route::resource('page', 'PageController');
Route::resource('globals', 'GlobalController');
