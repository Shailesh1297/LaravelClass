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

//authentication
Route::get('/login','LoginController@showLogin')->middleware('logged');

Route::post('/login','LoginController@validateLogin');

Route::get('/home','HomeController@home');

Route::get('/upload','UploadController@showUpload');

Route::post('/upload','UploadController@validateUpload');

Route::get('/post','PostController@show');

//crud database
Route::resource('/posts','UserPost');

Route::get('/firstlast','FirstLastController@show');

//session
Route::get('/session','SessionController@show');

Route::post('/session','SessionController@save');
Route::get('/session-data','SessionController@showSessionData');
Route::get('/session-delete','SessionController@deleteSession');












