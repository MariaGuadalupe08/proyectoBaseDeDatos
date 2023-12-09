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
        <h2 class="text-center">Información de hoteles y usuario administrador</h2>
        <h3 class="text-center">vista de los hoteles con la informacion de usuario</h3>

        <div class="row justify-content-center mt-4">
            <div class="col-md-10">
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>id hotel</th>
                            <th>Nombre del hotel</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Precio de hospedaje</th>
                            <th>Descripción</th>
                            <th>Estrellas</th>
                            <th>Nombre de usuario administrador</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($hotelesUsuarios as $hotelUsuario)
                            <tr>
                                <td>{{ $hotelUsuario->hotel_id }}</td>
                                <td>{{ $hotelUsuario->nombre_hotel }}</td>
                                <td>{{ $hotelUsuario->direccion}}</td>
                                <td>{{ $hotelUsuario->telefono }}</td>
                                <td>{{ $hotelUsuario->precio_hospedaje }}</td>
                                <td>{{ $hotelUsuario->descripcion }}</td>
                                <td>{{ $hotelUsuario->estrellas }}</td>
                                <td>{{ $hotelUsuario->admin_username }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Sin información que mostrar</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
