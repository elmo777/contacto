<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrador - Tabla de Usuarios</title>
  <!-- Bootstrap 5 CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

  <div class="container mt-4">
    <h1>Administrador - Control de Usuarios</h1>
    <!-- Barra de búsqueda -->
    <div class="mb-3">
      <input type="text" class="form-control" id="searchInput" placeholder="Buscar usuario">
    </div>
    <!-- Tabla de usuarios -->
    <a href="{{ route('usuarios.create') }}" class="btn btn-sm btn-success me-1" style="float:right">
      <i class="fas fa-save"></i> Agregar
  </a>
  
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Nombres</th>
          <th>Apellidos</th>
          <th>Telefono</th>
          <th>Direccion</th>
          <th>Email</th>
          @can('todo')
          <th>Rol</th>
          <th>Acciones</th>
          @endcan
        </tr>
      </thead>
      <tbody>
       <tr>
       @foreach($usuarios as $usuario)
        <tr>
        <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->nombres }}</td>
            <td>{{ $usuario->apellidos }}</td>
            <td>{{ $usuario->telefono }}</td>
            <td>{{ $usuario->direccion }}</td>
            <td>{{ $usuario->email }}</td>
            @can('todo')
          <td class="d-flex justify-content-end">
           
            <a href="{{ route('usuarios.crear',$usuario->id) }}" class="btn btn-sm btn-primary me-1">
                <i class="fas fa-edit"></i> Editar
            </a>
            <a href="{{ route('usuarios.destroy',$usuario->id) }}" class="btn btn-sm btn-danger">
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