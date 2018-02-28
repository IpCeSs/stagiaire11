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

Route::get('/user/create', 'UserController@create');
Route::post('/user', 'UserController@store');
route::get('/user/all','UserController@show');

Route::get('/news/create', 'NewsController@create');
Route::post('/news/articles', 'NewsController@store');



