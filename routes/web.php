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

Route::group(['middleware' => ['permiso:1']], function () {
    Route::resource('clientes','ClientesController');
});
/*
get/clientes index
post/clientes store
get/clientes/create formulario crear

get/clientes/id mostrar un producto con ID
get/clientes/id/edit
put/patch/clientes/id
delete/cliente/id
*/

Route::group(['middleware' => ['permiso:6']], function () {
    Route::resource('tipohabitacions','TipoHabitacionsController');
    Route::get('habitacionAjax','HospedajesController@habitacionAjax');
});

Route::group(['middleware' => ['permiso:2']], function () {
        Route::resource('habitacions','HabitacionsController');
});

Route::group(['middleware' => ['permiso:5']], function () {
    Route::resource('locals','LocalsController');
});

Route::group(['middleware' => ['permiso:7']], function () {
    Route::resource('tipotrabajadors','TipotrabajadorsController');
});

Route::group(['middleware' => ['permiso:8']], function () {
    Route::resource('trabajadors','TrabajadorsController');
});

Route::group(['middleware' => ['permiso:4']], function () {
    Route::resource('licencias','LicenciasController');
});

Route::group(['middleware' => ['permiso:3']], function () {
    Route::resource('hospedajes','HospedajesController');
});



Route::group(['middleware' => ['permiso:accesos']], function () {
    Route::resource('accesos','AccesosController');
});

Route::group(['middleware' => ['permiso:9']], function () {
    Route::resource('users','UsersController');
});

Route::post('userLogeo','Auth\LoginController@postLogin');

Auth::routes();

// Route::get('Users','App\Http\Controllers\Auth\RegisterController@lista_usuario');
Route::get('/home', 'HomeController@index');
