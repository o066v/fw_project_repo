@extends('layouts.masteruser')


@section('content')

<div class="row">
    <div class="col-sm-3">
      <!-- Se crea solo para centrar el formulario de registro-->
    </div>
    <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
              <form method="post" action ="{{ route('guardarproducto') }}">

                  <h1 class="h3 mb-3 fw-normal text-center">Añadir nuevo producto</h1>
              
                  <div class="form-floating m-2">
                    <input type="text" class="form-control" id="codigo" name="codigo" >
                    <label for="codigoproducto">Código Producto</label>
                  </div>
                  <div class="form-floating m-2">
                    <input type="text" class="form-control" id="nombre" name="nombre" >
                    <label for="nombreproducto">Nombre producto</label>
                  </div>
                  <div class="form-floating m-2">
                    <input type="text" class="form-control" id="categoria" name="categoria" >
                    <label for="categoriaproducto">Categoría</label>
                  </div>
                  <div class="form-floating m-2">
                    <input type="text" class="form-control" id="sucursal"  name="sucursal" >
                    <label for="nombresucursalproducto">Sucursal</label>
                  </div>
                  <div class="form-floating m-2">
                    <input type="text" class="form-control" id="descripcion" name="descripcion" >
                    <label for="descripcionproducto">Descripción</label>
                  </div>
                  <div class="form-floating m-2">
                    <input type="number" class="form-control" id="cantidad" name="cantidad" >
                    <label for="cantidadproducto">Cantidad</label>
                  </div>
                  <div class="form-floating m-2">
                    <input type="number" class="form-control" id="precio" name="precio" >
                    <label for="precioventaproducto">Precio venta</label>
                  </div>
                  <div class="text-center">
                    <button class="w-50 btn btn-lg btn-primary" type="submit" >Registrar producto</button>
                  </div>
                  
                  @if($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach($errors->all() as $error)
                          <li>{{$error}}</li>
                        @endforeach
                      </ul>
                    </div>
                  @endif

                </form>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
      <!-- Se crea solo para centrar el formulario de registro-->
    </div>
  </div>  

@stop