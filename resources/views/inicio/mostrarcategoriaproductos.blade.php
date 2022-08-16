@extends('layouts.masteruser')


@section('content')

<div class="row">
  <div class="col-sm">
    <div class="card">
      <div class="card-body">

        <h1 class="h3 mb-3 fw-normal text-center">Listado de categorías</h1>

        <div class="row">

          @foreach($categorias as $categoria)
          <div class="col-3">
            <div class="card text-center">
              <h5>{{ $categoria->nombre}}</h5>
              <p>Codigo Categoría: {{ $categoria->codigo}}</p>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </div>
  </div>
</div>

@stop