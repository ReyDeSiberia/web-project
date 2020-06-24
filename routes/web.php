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

Route::get('/','ApiController@indexAction');
Route::get('/gallery','ApiController@galleryAction');
Route::get('/video','ApiController@videoAction');
Route::get('/stats','ApiController@statsAction');
Route::get('/reg','ApiController@reg');
Route::get('/search','ApiController@search');


Route::get('/auth','AuthController@auth');
Route::get('/registration','AuthController@registration');


Route::middleware('auth')->group(function () {
    Route::get('/logout','AuthController@logout');
});
