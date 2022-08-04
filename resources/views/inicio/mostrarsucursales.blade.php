@extends('layouts.masteruser')


@section('content')

<div class="row">
    <div class="col-sm">
        <div class="card">
          <div class="card-body">
              <form>
                  <h1 class="h3 mb-3 fw-normal text-center">Listado de productos</h1>
              
                  <div class="form-floating m-2">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Código</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Categoría</th>
                          <th scope="col">Sucursal</th>
                          <th scope="col">Descripción</th>
                          <th scope="col">Cantidad</th>
                          <th scope="col">Precio venta</th>
                          <th scope="col">Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>16ACH6H</td>
                          <td>Lenovo Legion 5 Pro</td>
                          <td>Notebooks</td>
                          <td>Valdivia</td>
                          <td>Computador gamers de última generación</td>
                          <td>20</td>
                          <td>$1.150.000</td>
                          <td>Editar | Eliminar</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>16ACH6H</td>
                          <td>Lenovo Legion 5 Pro</td>
                          <td>Notebooks</td>
                          <td>Valdivia</td>
                          <td>Computador gamers de última generación</td>
                          <td>20</td>
                          <td>$1.150.000</td>
                          <td>Editar | Eliminar</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>16ACH6H</td>
                          <td>Lenovo Legion 5 Pro</td>
                          <td>Notebooks</td>
                          <td>Valdivia</td>
                          <td>Computador gamers de última generación</td>
                          <td>20</td>
                          <td>$1.150.000</td>
                          <td>Editar | Eliminar</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  
                </form>
          </div>
        </div>
      </div>
  </div>  

@stop