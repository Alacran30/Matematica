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
Route::get('/', function(){
    return view('index.welcome');
});

/* Route::get('/administrador', function(){
		return view('administrador.welcome');
}); */

Route::get('administrador', [
	'uses' => 'Auth\LoginController@getLogin',
	'as' => 'administrador'
	]);

Route::post('administrador/login',[
	'uses' => 'Auth\LoginController@postLogin',
	'as' => 'administrador.login'
	]);

Route::get('logout', function(){
	auth()->logout();
	return Redirect::to('administrador');
});

Route::get('inicio', function(){
    return view('administrador.inicio');
});


