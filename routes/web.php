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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'CarsController@index')
     ->name('home');
Route::get('/home/car', 'CarsController@view')
    ->name('add.car');
Route::post('/home/car', 'CarsController@store')
    ->name('post.car');
