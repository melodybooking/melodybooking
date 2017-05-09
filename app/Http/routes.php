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

Route::get('/', function () {

    return view('welcome');
    
});

Route::get('/create', function () {

	return view('artists/create_artists');
});

get('protected', ['middleware' => ['auth', 'admin'], function() {
    // this page requires that you be logged in AND be an Admin
    return view( ... );
}]);

get('protected', ['middleware' => ['auth'], function() {
    // this page requires that you be logged inbut you don't need to be an admin
    return view( ... );
}]);

