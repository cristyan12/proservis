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

Route::resources([
	'prestador' => 'PrestadorController'
]);

// Route::get('/', [
// 	'uses' => 'PrestadorController@index',
// 	'as' => 'prestadores.index'
// ]);

// Route::get('/prestadores/create', [
// 	'uses' => 'PrestadorController@create',
// 	'as' => 'prestadores.create'
// ]);

// Route::get('/prestadores/show/{id}', [
// 	'uses' => 'PrestadorController@show',
// 	'as' => 'prestador.show'
// ]);

// Route::post('prestadores', [
// 	'uses' => 'PrestadorController@store',
// 	'as' => 'prestadores.store'
// ]);
