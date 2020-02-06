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

Route::get('/', 'HomeController@index');
Route::get('/profile', 'HomeController@showProfile');
Route::get('/all', 'HomeController@showads');
route::get('/ad', 'HomeController@showad');
route::get('/info', 'HomeController@showinfo');
route::get('/contact', 'HomeController@showcontact');
