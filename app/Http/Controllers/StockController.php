<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function welcome(){
    return view('welcome');
    }

    public function index(){
      return view('index');
    }
    
    public function login(){
      return view('login');
    }

    public function registro(){
      return view('registro');
    }

    public function inicio(){
      return view('inicio');
    }

    public function mostrarproductos(){
      return view('inicio/mostrarproductos');
    }

    public function mostrarsucursales(){
      return view('inicio/mostrarsucursales');
    }

    public function registroproducto(){
      return view('inicio/registroproducto');
    }

    public function registrocategoriaproducto(){
      return view('inicio/registrocategoriaproducto');
    }

    public function registrosucursal(){
      return view('inicio/registrosucursal');
    }

    public function buscar(){
      return view('inicio/buscar');
    }

    public function guardarproducto(Request $request){
      //dd($request);
      $this ->validate($request,[
        'codigo' => 'required|min:5',
        'nombre' => 'required|min:5',
        'categoria' => 'required|min:5',
        'sucursal' => 'required',
        'descripcion' => 'required|min:5',
        'cantidad' => 'required|integer',
        'precio' => 'required|integer'
      ]);

      return "[OK] PRODUCTO INGRESADO AL SISTEMA.";
        
    }

    public function guardarsucursal(Request $request){
      //dd($request);
      $this ->validate($request,[
        'codigo' => 'required|min:5',
        'nombre' => 'required|min:5',
        'ciudad' => 'required|min:5',
        'telefono' => 'required|min:9',
        'encargado' => 'required|min:5',
      ]);

      return "[OK] SUCURSAL INGRESADA AL SISTEMA.";
      
    }

    public function guardarcategoriaproducto(Request $request){
      //dd($request);
      $this ->validate($request,[
        'codigo' => 'required|min:5',
        'nombre' => 'required|min:5',
      ]);

      return "[OK] CATEGORÍA INGRESADA AL SISTEMA.";
      
    }

}