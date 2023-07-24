<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>
<body>
<div class="container mt-4">
        <h1>Usuario</h1>
        <form action="{{ route('usuarios.crear',$data->id) }}" method="GET">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Nombres" name="nombres" required value="{{$data->nombres}}">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Apellidos" name="apellidos" required value="{{$data->apellidos}}">
            </div>
            <div class="mb-3">
                <input type="number" class="form-control" placeholder="Telefono" name="telefono" required minlength="5" maxlength="9" value="{{$data->telefono}}">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Direccion" name="direccion" value="{{$data->direccion}}">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Email" name="email" required value="{{$data->email}}">
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Guardar
            </button>
        </form>
    </div>
</body>
</html>