@extends('layouts.master')


@section('content')
<div class="row text-center">
    <div class="col-sm-3">
      
    </div>
    <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <form>
                <h1 class="h3 mb-3 fw-normal">Registrarse</h1>
            
                <div class="form-floating m-2">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Correo electrónico</label>
                </div>
                <div class="form-floating m-2">
                  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Contraseña</label>
                </div>
                <div class="form-floating m-2">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Repetir Contraseña</label>
                  </div>
                <a href="/login" class="w-50 btn btn-lg btn-primary" type="submit">Registrar</a>
              </form>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
      
    </div>
  </div>   
@stop