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

Route::get('/', 'MainController@home');

Route::resource('clientes','ClientesController');
/*
get/clientes index
post/clientes store
get/clientes/create formulario crear

get/clientes/id mostrar un producto con ID
get/clientes/id/edit
put/patch/clientes/id
delete/cliente/id
*/

Route::resource('tipohabitacions','TipoHabitacionsController');
Route::resource('habitacions','HabitacionsController');
Route::resource('locals','LocalsController');
Route::resource('tipotrabajadors','TipotrabajadorsController');
Route::resource('trabajadors','TrabajadorController');
Route::resource('licencias','LicenciasController');

Auth::routes();

Route::get('/home', 'HomeController@index');
