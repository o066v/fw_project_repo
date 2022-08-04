<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - Gestión de Stock</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">
    <link href="inicio.css" rel="stylesheet">

  </head>
  <body>
    
  <!-- Header -->
  @section('header')<!--section cuando quiero agregar un contenido inicial html-->
    
  <header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/inicio" class="d-flex align-items-left col-md-2">
          <img class="mb-2" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="52" height="37">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{ route('inicio') }}" class="nav-link px-2 link-dark">Inicio</a></li>
          <li><a href="{{ route('registroproducto') }}" class="nav-link px-2 link-dark">Registro de producto</a></li>
          <li><a href="{{ route('registrocategoriaproducto') }}" class="nav-link px-2 link-dark">Registro de categoría producto</a></li>
          <li><a href="{{ route('registrosucursal') }}" class="nav-link px-2 link-dark">Registro de sucursal</a></li>
          <li><a href="{{ route('mostrarproductos') }}" class="nav-link px-2 link-dark">Mostrar productos</a></li>
          <li><a href="{{ route('mostrarsucursales') }}" class="nav-link px-2 link-dark">Mostrar sucursales</a></li>
          <li><a href="{{ route('buscar') }}" class="nav-link px-2 link-dark">Buscar</a></li>
        </ul>

        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="#">Configuraciones</a></li>
            <li><a class="dropdown-item" href="#">Perfil</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/index">Desconectarse</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  @show  

  <!-- Body -->
       
        <div class="container">
            @yield('content') <!--yield, se usa cuando quiero declararlo solamente -->
        </div>

  <!-- Footer -->

  @section('footer')
  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="col-md-4 mb-0 text-muted">&copy; 2022 RRA Inventory Company, Inc</p>
  
      <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      </a>
  
      <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Soporte</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Base de conocimientos</a></li>
      </ul>
    </footer>
  </div>
  @show  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script><script src="dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>    
  </body>
</html>