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
        <h2 class="text-center">Información de usuarios relación users</h2>
        <h3 class="text-center">vista para ver información de usuarios</h3>

        <div class="row justify-content-center mt-4">
            <div class="col-md-10">
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>id de información</th>
                            <th>id de usuario</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Cumpleaños</th>
                            <th>Genero</th>
                            <th>Telefono</th>
                            <th>Biografía</th>
                            <th>Sitio web</th>
                            <th>Estatus</th>
                            <th>Fecha de creación</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($infoUsuarios as $infoUsuario)
                            <tr>
                                <td>{{ $infoUsuario->userinfo_id }}</td>
                                <td>{{ $infoUsuario->users_id }}</td>
                                <td>{{ $infoUsuario->name }}</td>
                                <td>{{ $infoUsuario->lastname }}</td>
                                <td>{{ $infoUsuario->birthday }}</td>
                                <td>{{ $infoUsuario->gender }}</td>
                                <td>{{ $infoUsuario->phone }}</td>
                                <td>{{ $infoUsuario->bio }}</td>
                                <td>{{ $infoUsuario->website }}</td>
                                <td>{{ $infoUsuario->status }}</td>
                                <td>{{ $infoUsuario->created_at }}</td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No hay informacion disponible</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
