<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

Route::any('/login', "UsersController@loginUsuario"); #carga métodos del controlador

/**
 * Books Controller
 */
Route::resource('books', 'BooksController');

Route::resource('users', 'UsersController');

Route::get('/catalogo', function(){
		if(Session::has("id")){
			return Redirect::to('books');
		}else{
			return Redirect::to('users/create'); #ruta index
		}
	});