@extends('layouts.masteruser')


@section('content')

<div class="row">
    <div class="col-sm">
        <div class="card">
          <div class="card-body">
              
                  <h1 class="h3 mb-3 fw-normal text-center">Listado de sucursales</h1>
              
                  <div class="row">
                    
                    @foreach($sucursales as $sucursal)
                    <div class="col-3">
                      <div class="card text-center">
                        <h5>{{ $sucursal->nombre}}</h5>
                        <p>Codigo Sucursal: {{ $sucursal->codigo}}</p>
                        <p>Ciudad: {{ $sucursal->ciudad}}</p>
                        <p>Telefono: {{ $sucursal->telefono}}</p>
                        <p>Encargado Sucursal: {{ $sucursal->encargado}}</p>
                      </div>
                     </div>
                    @endforeach

                  </div>

          </div>
        </div>
      </div>
  </div>  

@stop