<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursal;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\RelacionProductoSucursal;

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

    public function mostrarproductossucursales(){
     
      $productos_sucursales = RelacionProductoSucursal::get();

      //dd($categorias);

      return view('inicio/mostrarproductossucursales',[
        'productos_sucursales' => $productos_sucursales
      ]);
      
    }

    public function registroproducto(){
      $categorias = Categoria::get();

      //dd($categorias);

      return view('inicio/registroproducto',[
        'categorias' => $categorias
      ]);

    }

    public function registrocategoriaproducto(){
      return view('inicio/registrocategoriaproducto');
    }

    public function registrosucursal(){
      return view('inicio/registrosucursal');
    }

    public function relacionproductosucursal(){

      $productos = Producto::get();
      $sucursales = Sucursal::get();

      //dd($categorias);

      return view('inicio/relacionproductosucursal',[
        'productos' => $productos,
        'sucursales' => $sucursales
      ]);

    }


    public function buscar(){
      return view('inicio/buscar');
    }

    public function guardarproducto(Request $request){


      //dd($request);
      $this ->validate($request,[
        'codigo' => 'required|min:5',
        'nombre' => 'required|min:5',
        'categoria' => 'required',
        'descripcion' => 'required|min:5',
        'precio' => 'required|integer'
      ]);
      
      $producto = new Producto();
      $producto->codigo=$request->codigo;
      $producto->nombre=$request->nombre;
      $producto->categoria_id=$request->categoria;
      $producto->descripcion=$request->descripcion;
      $producto->precio=$request->precio;

      $producto -> save();
      

      $productos = Producto::get();
      return view('inicio/mostrarproductos',[
        'productos' => $productos
      ]);
      
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

      $sucursal = new Sucursal();
      $sucursal ->  codigo = $request->codigo;
      $sucursal ->  nombre =  $request->nombre;
      $sucursal ->  ciudad =  $request->ciudad;
      $sucursal ->  telefono =  $request->telefono;
      $sucursal ->  encargado =  $request->encargado;
      $sucursal -> save();

      $sucursales = Sucursal::get();
      return view('inicio/mostrarsucursales',[
        'sucursales' => $sucursales
      ]);
      
    }

    public function guardarcategoriaproducto(Request $request){
      //dd($request);
      $this ->validate($request,[
        'codigo' => 'required|min:5',
        'nombre' => 'required|min:5',
      ]);


      $categoria = new Categoria();
      $categoria ->  codigo = $request->codigo;
      $categoria ->  nombre =  $request->nombre;
      $categoria -> save();
      

      $categorias = Categoria::get();
      return view('inicio/mostrarcategoriaproductos',[
        'categorias' => $categorias
      ]);
      
    }

    public function guardarrelacionproductosucursal(Request $request){
      //dd($request);

      $this ->validate($request,[
        'producto' => 'required',
        'sucursal' => 'required',
        'cantidad' => 'required|min:1'
      ]);

      $productosucursal = new RelacionProductoSucursal();
      $productosucursal  ->  producto_id = $request->producto;
      $productosucursal  ->  sucursal_id =  $request->sucursal;
      $productosucursal  ->  cantidad =  $request->cantidad;
      $productosucursal  -> save();
      
      return "[OK] RELACION PRODUCTO - SUCURSAL.";
      
    }



}