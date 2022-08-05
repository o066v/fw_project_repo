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

Route::get('/',[
    'uses' => 'StockController@welcome',
    'as' => 'welcome'
  ]);
  
  Route::get('/index',[
    'uses' => 'StockController@index',
    'as' => 'index'
  ]);
  
  Route::get('/login',[
    'uses' => 'StockController@login',
    'as' => 'login'
  ]);
  
  Route::get('/registro',[
    'uses' => 'StockController@registro',
    'as' => 'registro'
  ]);
  
  Route::get('/inicio',[
    'uses' => 'StockController@inicio',
    'as' => 'inicio'
  ]);
  
  Route::get('/inicio/registroproducto',[
    'uses' => 'StockController@registroproducto',
    'as' => 'registroproducto'
  ]);
  
  Route::get('/inicio/registrocategoriaproducto',[
    'uses' => 'StockController@registrocategoriaproducto',
    'as' => 'registrocategoriaproducto'
  ]);
  
  Route::get('/inicio/registrosucursal',[
    'uses' => 'StockController@registrosucursal',
    'as' => 'registrosucursal'
  ]);
  
  Route::get('/inicio/mostrarproductos',[
    'uses' => 'StockController@mostrarproductos',
    'as' => 'mostrarproductos'
  ]);
  
  Route::get('/inicio/mostrarsucursales',[
    'uses' => 'StockController@mostrarsucursales',
    'as' => 'mostrarsucursales'
  ]);
  
  Route::get('/inicio/mostrarcategoriaproductos',[
    'uses' => 'StockController@mostrarcategoriaproductos',
    'as' => 'mostrarcategoriaproductos'
  ]);

  Route::get('/inicio/buscar',[
    'uses' => 'StockController@buscar',
    'as' => 'buscar'
  ]);
  
  //POST 
  
  Route::post('/inicio/guardarproducto',[
    'uses' => 'StockController@guardarproducto',
    'as' => 'guardarproducto'
  ]);
  
  Route::post('/inicio/guardarsucursal',[
    'uses' => 'StockController@guardarsucursal',
    'as' => 'guardarsucursal'
  ]);
  
  Route::post('/inicio/guardarcategoriaproducto',[
    'uses' => 'StockController@guardarcategoriaproducto',
    'as' => 'guardarcategoriaproducto'
  ]);

