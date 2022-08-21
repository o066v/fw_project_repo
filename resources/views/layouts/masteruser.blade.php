<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard - Gestión de Stock</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">
  <link href="inicio.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
</head>

<body>

  <!-- Header -->
  @section('header')
  <!--section cuando quiero agregar un contenido inicial html-->

  <header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="{{ route('inicio') }}">
          <img class="mb-2" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="52"
            height="37">
        </a>

        <div class="container">
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <div class="dropdown">
              <button class="btn type=" id="dropdown1" data-toggle="dropdown">
                Menú de Navegación
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('inicio') }}">Inicio</a>
                <a class="dropdown-item" href="{{ route('registroproducto') }}">Registro
                  de
                  producto</a>
                <a class="dropdown-item" href="{{ route('registrocategoriaproducto') }}">Registro de categoría
                  producto</a>
                <a class="dropdown-item" href="{{ route('registrosucursal') }}">Registro
                  de
                  sucursal</a>
                <a class="dropdown-item" href="{{ route('relacionproductosucursal') }}">Asociar Producto/Sucursal</a>
                <a class="dropdown-item" href="{{ route('mostrarproductos') }}">Mostrar
                  productos</a>
                <a class="dropdown-item" href="{{ route('mostrarsucursales') }}">Mostrar
                  sucursales</a>
                <a class="dropdown-item" href="{{ route('mostrarcategoriaproductos') }}">Mostrar categoria productos</a>
                <a class="dropdown-item" href="{{ route('mostrarproductossucursales') }}">Mostrar productos en sucursales</a>
                <a class="dropdown-item" href="{{ route('buscar') }}">Buscar</a>
                </button>
              </div>
            </div>

            <li><a class="nav-link px-2 link-dark" href="#">Configuraciones</a></li>
            <li><a class="nav-link px-2 link-dark" href="#">Perfil</a></li>
            <li><a class="nav-link px-2 link-dark" href="/index">Desconectarse</a></li>
          </ul>
        </div>


      </div>
    </div>
  </header>
  @show

  <!-- Body -->

  <div class="container">
    @yield('content')
    <!--yield, se usa cuando quiero declararlo solamente -->
  </div>

  <!-- Footer -->

  @section('footer')
  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="col-md-4 mb-0 text-muted">&copy; 2022 RRA Inventory Company, Inc</p>

      <a href="/"
        class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
          <use xlink:href="#bootstrap" />
        </svg>
      </a>

      <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Soporte</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Base de conocimientos</a></li>
      </ul>
    </footer>
  </div>
  @show
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
  </script>
  <script src="dashboard.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
    integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
  </script>
</body>

</html>