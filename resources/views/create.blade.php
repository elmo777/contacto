<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Usuario</title>
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="antialiased">
    <div class="container mt-4">
        <h1>Nuevo Usuario</h1>
        <form action="{{ route('usuarios.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Nombres" name="nombres" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Apellidos" name="apellidos" required>
            </div>
            <div class="mb-3">
                <input type="number" class="form-control" placeholder="Telefono" name="telefono" required minlength="5" maxlength="9">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Direccion" name="direccion">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Email" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Guardar
            </button>
        </form>
    </div>

    <!-- Bootstrap 5 JS y dependencias Popper.js y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>
</body>
</html>