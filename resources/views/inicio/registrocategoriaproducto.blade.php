@extends('layouts.masteruser')


@section('content')

<div class="row">
    <div class="col-sm-3">
      <!-- Se crea solo para centrar el formulario de registro-->
    </div>
    <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
              <form method="post" action ="{{ route('guardarcategoriaproducto') }}">
                  <h1 class="h3 mb-3 fw-normal text-center">Añadir categoría producto</h1>
              
                  <div class="form-floating m-2">
                    <input type="text" class="form-control" id="codigo" name='codigo'>
                    <label for="codigosucursal">Código categoría producto</label>
                  </div>
                  <div class="form-floating m-2">
                    <input type="text" class="form-control" id="nombre" name='nombre'>
                    <label for="nombresucursal">Nombre categoría producto</label>
                  </div>
                  <div class="text-center">
                    <button class="w-50 btn btn-lg btn-primary" type="submit" >Registrar categoría producto</button>
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