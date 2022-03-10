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

Route::get('/', 'App\Http\Controllers\PagesController@index');

Route::get('/home', 'App\Http\Controllers\PagesController@index');

Route::get('/departure', 'App\Http\Controllers\PagesController@departure');

Route::get('/arrival', 'App\Http\Controllers\PagesController@arrival');
