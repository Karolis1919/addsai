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
route::get('/category', 'HomeController@showcat');
route::get('/form', 'HomeController@showform');
route::get('/add', 'CategoryController@createCategory');
route::post('/store', 'CategoryController@storeCategory');
route::get('/register', 'HomeController@showregister');
route::get('/catlist', 'CategoryController@showcatlist');
route::get('/delete/category/{category}', 'CategoryController@deleteCategory');
route::get('/category', 'AdController@createAd');
route::get('/delete/ad/{ad}', 'AdController@deleteAd');
route::get('/edit/ad/{ad}', 'AdController@updateAd');
route::get('/form', 'AdController@showform');
route::post('/insert', 'AdController@storeAd');
route::get('/ad{ad}', 'HomeController@oneAd');
route::get('/editad', 'AdController@showeditad');