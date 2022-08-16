@extends('layouts.masteruser')


@section('content')

<div class="row">
  <div class="col-sm">
    <div class="card">
      <div class="card-body">

        <h1 class="h3 mb-3 fw-normal text-center">Listado de productos</h1>

        <div class="row">

          @foreach($productos as $producto)
          <div class="col-3">
            <div class="card text-center">
              <h5>{{ $producto->nombre}}</h5>
              <p>Codigo Producto: {{ $producto->codigo}}</p>
              <p>Descripcion Producto: {{ $producto->descripcion}}</p>
              <p>Cantidad en Stock: {{ $producto->cantidad}}</p>
              <p>Precio Unidad: ${{ $producto->precio}} pesos</p>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </div>
  </div>
</div>

@stop