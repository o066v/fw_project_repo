<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;
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

//GET

Route::get('/',[
  'uses' => 'App\Http\Controllers\StockController@welcome',
  'as' => 'welcome'
]);

Route::get('/index',[
  'uses' => 'App\Http\Controllers\StockController@index',
  'as' => 'index'
]);

Route::get('/login',[
  'uses' => 'App\Http\Controllers\StockController@login',
  'as' => 'login'
]);

Route::get('/registro',[
  'uses' => 'App\Http\Controllers\StockController@registro',
  'as' => 'registro'
]);

Route::get('/inicio',[
  'uses' => 'App\Http\Controllers\StockController@inicio',
  'as' => 'inicio'
]);

Route::get('/inicio/registroproducto',[
  'uses' => 'App\Http\Controllers\StockController@registroproducto',
  'as' => 'registroproducto'
]);

Route::get('/inicio/registrocategoriaproducto',[
  'uses' => 'App\Http\Controllers\StockController@registrocategoriaproducto',
  'as' => 'registrocategoriaproducto'
]);

Route::get('/inicio/registrosucursal',[
  'uses' => 'App\Http\Controllers\StockController@registrosucursal',
  'as' => 'registrosucursal'
]);

Route::get('/inicio/mostrarproductos',[
  'uses' => 'App\Http\Controllers\StockController@mostrarproductos',
  'as' => 'mostrarproductos'
]);

Route::get('/inicio/mostrarsucursales',[
  'uses' => 'App\Http\Controllers\StockController@mostrarsucursales',
  'as' => 'mostrarsucursales'
]);

Route::get('/inicio/buscar',[
  'uses' => 'App\Http\Controllers\StockController@buscar',
  'as' => 'buscar'
]);

//POST

Route::post('/inicio/guardarproducto',[
  'uses' => 'App\Http\Controllers\StockController@guardarproducto',
  'as' => 'guardarproducto'
]);

Route::post('/inicio/guardarsucursal',[
  'uses' => 'App\Http\Controllers\StockController@guardarsucursal',
  'as' => 'guardarsucursal'
]);

Route::post('/inicio/guardarcategoriaproducto',[
  'uses' => 'App\Http\Controllers\StockController@guardarcategoriaproducto',
  'as' => 'guardarcategoriaproducto'
]);