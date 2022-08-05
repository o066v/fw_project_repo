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
                  <h1 class="h3 mb-3 fw-normal text-center">Añadir sucursal</h1>
              
                  <div class="form-floating m-2">
                    <input type="text" class="form-control" id="floatingInput" placeholder="16ACH6H">
                    <label for="codigosucursal">Código sucursal</label>
                  </div>
                  <div class="form-floating m-2">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Lenovo Legion 5 Pro 16ACH6H">
                    <label for="nombresucursal">Nombre sucursal</label>
                  </div>
                  <div class="form-floating m-2">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Notebooks">
                    <label for="ciudadsucursal">Ciudad sucursal</label>
                  </div>
                  <div class="form-floating m-2">
                    <input type="number" class="form-control" id="floatingInput" placeholder=" Sucursal Valdivia">
                    <label for="telefonosucursal">Teléfono sucursal</label>
                  </div>
                  <div class="form-floating m-2">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Lenovo Legion 5 Pro 16ACH6H">
                    <label for="encargadosucursal">Encargado de sucursal</label>
                  </div>
                  <div class="text-center">
                    <a href="/dashboard" class="w-50 btn btn-lg btn-primary type="button">Registrar sucursal</a>
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