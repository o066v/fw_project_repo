@extends('layouts.masteruser')


@section('content')

<div class="row">
  <div class="col-sm-3">
    <!-- Se crea solo para centrar el formulario de registro-->
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <form>
          <h1 class="h3 mb-3 fw-normal text-center">Buscar Producto</h1>

          <div class="form-floating m-2">
            <input type="text" class="form-control" id="codigo" name="codigo">
            <label for="codigoproducto">Código Producto</label>
          </div>
          <div class="text-center">
            <button class="w-50 btn btn-lg btn-primary" type="submit">Buscar</button>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <!-- Se crea solo para centrar el formulario de registro-->
  </div>
</div>

@stop