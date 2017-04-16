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
Route::resource('trabajadors','TrabajadorsController');
Route::resource('licencias','LicenciasController');
Route::resource('hospedajes','HospedajesController');
Route::get('habitacionAjax','HospedajesController@habitacionAjax');
Route::resource('accesos','AccesosController');
Route::resource('users','UsersController');

Route::post('userLogeo','Auth\LoginController@postLogin');

Auth::routes();

// Route::get('Users','App\Http\Controllers\Auth\RegisterController@lista_usuario');
Route::get('/home', 'HomeController@index');
