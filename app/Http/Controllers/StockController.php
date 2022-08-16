<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursal;
use App\Models\Categoria;
use App\Models\Producto;

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
      $productos = Producto::get();

      //dd($productos);

      return view('inicio/mostrarproductos',[
        'productos' => $productos
      ]);
      
    }

    public function mostrarsucursales(){
      $sucursales = Sucursal::get();

      //dd($sucursales);

      return view('inicio/mostrarsucursales',[
        'sucursales' => $sucursales
      ]);
      
    }

    public function mostrarcategoriaproductos(){
      $categorias = Categoria::get();

      //dd($categorias);

      return view('inicio/mostrarcategoriaproductos',[
        'categorias' => $categorias
      ]);
      
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

    public function relacionproductosucursal(){
      return view('inicio/relacionproductosucursal');
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
        'descripcion' => 'required|min:5',
        'precio' => 'required|integer'
      ]);
      
      $producto = new Producto();
      $producto->codigo=$request->codigo;
      $producto->nombre=$request->nombre;
      $producto->categoria=$request->categoria;
      $producto->descripcion=$request->descripcion;
      $producto->precio=$request->precio;

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

    public function guardarrelacionproductosucursal(Request $request){
      //dd($request);

      $this ->validate($request,[
        'producto' => 'required|min:5',
        'sucursal' => 'required|min:5',
        'cantidad' => 'required|min:5'
      ]);

      return "[OK] RELACION PRODUCTO - SUCURSAL.";
      
    }



}