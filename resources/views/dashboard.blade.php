@extends('layouts.masteruser')


@section('content')

<div class="container col-xxl-8 px-4 py-5">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="https://getbootstrap.com/docs/5.2/examples/heroes/bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold lh-1 mb-3">Software de gestión de stock de primer nivel</h1>
      <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <a href="/dashboard/registroproducto" class="btn btn-primary">Añadir producto</a>
        <a href="/dashboard/mostrarproductos" class="btn btn-outline-secondary">Mostrar productos</a>
      </div>
    </div>
  </div>
</div>
@stop