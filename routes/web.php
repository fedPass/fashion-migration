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
Route::get('/', 'HomeController@index')->name('home');
Route::get('/clothes', 'ClothController@index')->name('clothes');
Route::get('/clothes/create', 'ClothController@create')->name('create-cloth');
Route::post('/clothes/create', 'ClothController@store')->name('store-cloth');
