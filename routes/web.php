<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/isi',function (){
	return 'halo laravel5 ';
});

Route::get ('/about', 'AboutController@about');
Auth::routes();

Route::get('/home', 'HomeController@index');

//Route::get('middle', ['middleware'=> 'guest','uses' => 'HomeController@index']);
//route group middleware
Route::group(['prefix' => 'admin', 'middleware' => ['auth','role:admin']], function(){
	Route::resource ('authors','AuthorController');
});