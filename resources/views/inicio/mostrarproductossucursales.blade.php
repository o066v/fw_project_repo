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
              <p value="$productosucursal->productos->id">{{$productosucursal->id}}</p>
              <p value="$productosucursal->sucursales->id">{{$productosucursal->id}}</p>
              <p>Cantidad en Stock: {{$productosucursal->cantidad}}</p>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </div>
  </div>

  @stop