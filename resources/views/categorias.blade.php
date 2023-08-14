@include('layout/plantilla')

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Categorias</title>
  <!-- Bootstrap 5 CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
  @yield('menu')

  <div class="container mt-4">
    <h1>Lista categorias</h1>
    <!-- Barra de búsqueda -->
    <div class="mb-3">
      <input type="text" class="form-control" id="searchInput" placeholder="Buscar usuario">
    </div>
 @can ('todo')
    <a href="{{ route('categorias.create') }}" class="btn btn-sm btn-success me-1" style="float:right">
      <i class="fas fa-save"></i> Agregar
  </a>
  @endcan
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Nombre</th>
          <th>Descripcion</th>
          <th>Precio</th>
          <th>Stock</th>
        </tr>
      </thead>
      <tbody>
       <tr>
        @foreach($categorias as $categoria)
        <tr>
            <td>{{ $categoria->id }}</td>
            <td>{{ $categoria->nombre }}</td>
            <td>{{ $categoria->descripcion }}</td>
            <td>{{ $categoria->precio }}</td>
            <td>{{ $categoria->stock }}</td>
            @can('todo')
            <td class="d-flex justify-content-end">
                <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-sm btn-primary me-1">
                    <i class="fas fa-edit"></i> Editar
                </a>
                <a href="{{ route('categorias.destroy', $categoria->id) }}" class="btn btn-sm btn-danger">
                    <i class="fas fa-trash"></i> Eliminar
                </a>
            </td>
            @endcan
        </tr>
        @endforeach
        
        <!-- Agrega más filas de usuarios aquí -->
      </tbody>
    </table>
  </div>

  <!-- Bootstrap 5 JS y dependencias Popper.js y jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>
</body>
</html>