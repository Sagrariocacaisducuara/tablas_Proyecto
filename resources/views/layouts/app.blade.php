<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="{{ asset('/') }}">INICIO <span class="sr-only"></span></a>
      <a class="nav-item nav-link" href="{{ asset('/rol') }}">ROLES</a>
      <a class="nav-item nav-link" href="{{ asset('/usuarios') }}">USUARIOS</a>
      <a class="nav-item nav-link" href="{{ asset('/cliente') }}">CLIENTES</a>
      <a class="nav-item nav-link" href="{{ asset('/habitaciones') }}">HABITACIONES</a>
      <a class="nav-item nav-link" href="{{ asset('/reservas') }}">RESERVAS</a>
      <a class="nav-item nav-link" href="{{ asset('/servicios') }}">SERVICIOS</a>
      <a class="nav-item nav-link disabled" href="#">Disabled</a>
    </div>
  </div>
</nav>
    @yield('content')
  
</body>
</html>