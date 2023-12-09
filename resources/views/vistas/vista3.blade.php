<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BD Proyect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <div class="container mt-5">
        <h2 class="text-center">Información de usuarios y gastronomía</h2>
        <h3 class="text-center">vista de información de los usuarios y los restaurantes de gastronomía que administran</h3>

        <div class="row justify-content-center mt-4">
            <div class="col-md-10">
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>id del usuario</th>
                            <th>Nombre de usuario</th>
                            <th>Estatus del usuario</th>
                            <th>Perfil</th>
                            <th>id de gastronomia</th>
                            <th>Nombre del restaurante</th>
                            <th>Tipo de comida</th>
                            <th>Tipo de cocina</th>
                            <th>Capacidad</th>
                            <th>Dirección</th>
                            <th>Telefono</th>
                            <th>Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($comidasUsuarios as $comidaUsuario)
                            <tr>
                                <td>{{ $comidaUsuario->users_id }}</td>
                                <td>{{ $comidaUsuario->username }}</td>
                                <td>{{ $comidaUsuario->user_status }}</td>
                                <td>{{ $comidaUsuario->profile }}</td>
                                <td>{{ $comidaUsuario->gastronomia_id }}</td>
                                <td>{{ $comidaUsuario->nombre_restaurante }}</td>
                                <td>{{ $comidaUsuario->tipo_comida }}</td>
                                <td>{{ $comidaUsuario->tipo_cocina }}</td>
                                <td>{{ $comidaUsuario->capacidad }}</td>
                                <td>{{ $comidaUsuario->direccion }}</td>
                                <td>{{ $comidaUsuario->telefono }}</td>
                                <td>{{ $comidaUsuario->descripcion }}</td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No hay lugares turísticos disponibles</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
