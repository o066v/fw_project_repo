@extends('layouts.masteruser')


@section('content')

<div class="row">
  <div class="col-sm-3">
    <!-- Se crea solo para centrar el formulario de registro-->
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <form method="post" action="{{ route('guardarrelacionproductosucursal') }}">
          <h1 class="h3 mb-3 fw-normal text-center">Relaciones Producto-Sucursal</h1>

          <div class="form-floating m-2">
            <input type="text" class="form-control" id="producto" name='producto'>
            <label for="producto">Producto</label>
          </div>
          <div class="form-floating m-2">
            <input type="text" class="form-control" id="sucursal" name='sucursal'>
            <label for="sucursal">Sucursal</label>
          </div>
          <div class="form-floating m-2">
            <input type="text" class="form-control" id="cantidad" name='cantidad'>
            <label for="cantidad">Cantidad (N° Unidades)</label>
          </div>
          <div class="text-center">
            <button class="w-50 btn btn-lg btn-primary" type="submit">Asociar Producto a Sucursal</button>
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