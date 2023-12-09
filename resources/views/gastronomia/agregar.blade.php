<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Agregar Comida</title>

    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 50px;
        }

        h2 {
            text-align: center;
            color: #007bff;
        }

        .btn-success {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="/gastronomias" method="POST">
            @csrf

            <h2>Agregar Comida</h2>

            <div class="mb-3">
                <label for="nombre_restaurante" class="form-label">Nombre del restaurante</label>
                <input type="text" class="form-control" name="nombre_restaurante" id="nombre_restaurante" required>
            </div>

            <div class="mb-3">
                <label for="tipo_comida" class="form-label">Tipo de comida</label>
                <input type="text" class="form-control" name="tipo_comida" id="tipo_comida" required>
            </div>

            <div class="mb-3">
                <label for="tipo_cocina" class="form-label">Tipo de cocina</label>
                <input type="text" class="form-control" name="tipo_cocina" id="tipo_cocina" required>
            </div>

            <div class="mb-3">
                <label for="capacidad" class="form-label">Capacidad</label>
                <input type="number" class="form-control" name="capacidad" id="capacidad" required>
            </div>

            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" name="direccion" id="direccion" required>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="tel" class="form-control" name="telefono" id="telefono" required>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" required>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-success">Agregar</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
