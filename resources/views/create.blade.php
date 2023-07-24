<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo</title>
</head>
    <body class="antialiased">
        <form action="{{ route('usuarios.store') }}" method="POST">
            @csrf
            <table>
            <tr>
                <td> <input type="text" placeholder="Nombres" name="nombres" required></td>
            </tr>
            <tr>
                <td> <input type="text" placeholder="Apellidos" name="apellidos" required></td>
            </tr>
            <tr>
                <td> <input type="number" placeholder="Telefono" name="telefono" required minlength="5" maxlength="9"></td>
            </tr>
            <tr>
                <td><input type="text" placeholder="Direccion" name="direccion"></td>
            </tr>
            <tr>
                <td><input type="text" placeholder="Email" name="email" required></td>
            </tr>
        </table>
        <button type="submit">Guardar </button>
        </form>
   
</body>
</html>