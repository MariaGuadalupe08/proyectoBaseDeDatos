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
        <h2 class="text-center">Información de las festividades</h2>
        <h3 class="text-center">vista que proporciona información de festividades</h3>

        <div class="row justify-content-center mt-4">
            <div class="col-md-10">
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>id de la festividad</th>
                            <th>Nombre de la festividad</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Atracciones</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($festividades as $festividad)
                            <tr>
                                <td>{{ $festividad->festividad_id }}</td>
                                <td>{{ $festividad->nombre_festividad }}</td>
                                <td>{{ $festividad->descripcion }}</td>
                                <td>{{ $festividad->precio }}</td>
                                <td>{{ $festividad->atracciones }}</td>
                                <td>{{ $festividad->fecha }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No hay festividades disponibles</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
