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


Route::get('/login','LoginController@showLogin');

Route::post('/login','LoginController@validateLogin');

Route::get('/home','HomeController@home');

Route::get('/upload','UploadController@showUpload');

Route::post('/upload','UploadController@validateUpload');

Route::get('/post','PostController@show');

Route::resource('/posts','UserPost');

Route::get('/firstlast','FirstLastController@show');
Route::post('/firstlast','FirstLastController@find');










