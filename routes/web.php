<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function (){
    return view('/index');
});

Route::get('/login', function (){
    return view('/login');
});
Route::get('/registro', function (){
    return view('/registro');
});

Route::get('/dashboard', function (){
    return view('/dashboard');
});

Route::get('/dashboard/mostrarproductos', function (){
    return view('/dashboard.mostrarproductos');
});

Route::get('/dashboard/registroproducto', function (){
    return view('/dashboard.registroproductos');
});

Route::get('/dashboard/registrosucursal', function (){
    return view('/dashboard.registrosucursal');
});