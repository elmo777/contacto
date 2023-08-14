
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <title>Document</title>

</head>
<body>
    
  @section('menu')
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
          
          <a class="navbar-brand" href="#" style="color: #5DE0E6">Menu principal</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{ route('usuarios.index') }}" style="color: #5DE0E6">Usuarios</a>
                  </li>
                  @can ('leer')
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{ route('productos.index') }}" style="color: #5DE0E6">Productos</a>
                  </li>
                  @endcan
                  @can ('todo')
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{ route('categorias.index') }}" style="color: #5DE0E6">Categorías</a>
                  </li>
                  @endcan
                  <li>
                      <a href="{{ route('salir') }}"><button class="btn btn-danger" type="submit">Cerrar sesión</button></a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
@endsection


</body>
</html>