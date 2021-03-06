<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



//
// Route::get('/create', function () {

// 	return view('artists/create_artists');
// });
//

// <?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','HomeController@showWelcome');
Route::get('/about', 'UserController@aboutUs');

Route::resource('/posts', 'PostsController'); // A resource controller
Route::resource('/users', 'UserController');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// User route...
Route::get('/users', 'UserController@show');
Route::get('/users/{id}/edit', 'UserController@edit');
Route::post('/users/{id}/edit', 'UserController@edit');
Route::get('/users/{id}/password', 'UserController@password');
Route::post('/users/{id}/password','UserController@updatePassword');

// Image upload routes

Route::get('image-upload',function(){
   return view('upload.index');
});
Route::post('image-upload','PostsController@imageUploadPost');

Route::get('image-upload',function(){
   return view('upload.index');
});
Route::post('image-upload','PostsController@imageUploadPost');

// Mail route

Route::post('sendMail', 'PostsController@sendMail');
