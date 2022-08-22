@extends('layouts.masteruser')


@section('content')

<div class="row">
  <div class="col-sm">
    <div class="card">
      <div class="card-body">

        <h1 class="h3 mb-3 fw-normal text-center">Listado Stock de Productos por Sucursal</h1>

        <div class="row">
          @foreach($productos_sucursales as $productosucursal)
            
              <div class="col-3">
              <div class="card text-center">
              <p>Nombre Producto: {{$productosucursal->producto->nombre}}</p>
              <p>Nombre Sucursal: {{$productosucursal->sucursal->nombre}}</p>
              <p>Cantidad en Stock: {{$productosucursal->cantidad}}</p>
              </div>
              </div>
              
          @endforeach

        </div>
      </div>
    </div>
  </div>

  @stop