<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Categoria</title>
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="antialiased">
    <div class="container mt-4">
        <h1>Nueva Categoria</h1>
        <form action="{{ route('categorias.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Descripcion" name="descripcion" required>
            </div>
            <div class="mb-3">
                <input type="number" class="form-control" placeholder="Precio" name="precio" required >
            </div>
            <div class="mb-3">
                <input type="number" class="form-control" placeholder="Stock" name="stock">
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