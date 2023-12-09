<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BD Proyect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <h1></h1>
    <div class="container text-center">
        <h2>Consulta Relacionada 2</h2>
        <h3>Selecciona todos los lugares turísticos con información de su administrador:</h3>
        <div class="row justify-content-center">
            <br><br>
            <div class="col-6">
                <table class="table table-striped table-hover">
                    <thead>
                        <th>ID del lugar</th>
                        <th>ID de usuario</th>
                        <th>Nombre del lugar</th>
                        <th>Descripcion</th>
                        <th>Ubicación</th>
                        <th>horario</th>
                        <th>costo de entrada</th>
                        <th>Nombre del administrador</th>
                    </thead>
                    <tbody>
                        <?php foreach ($lugaresconadmins as $lugarconadmin) : ?>
                            <tr>
                                <td><?= $lugarconadmin->lugar_id ?></td>
                                <td><?= $lugarconadmin->users_id ?></td>
                                <td><?= $lugarconadmin->nombre_lugar ?></td>
                                <td><?= $lugarconadmin->descripcion ?></td>
                                <td><?= $lugarconadmin->ubicacion ?></td>
                                <td><?= $lugarconadmin->horario ?></td>
                                <td><?= $lugarconadmin->costo_entrada ?></td>
                                <td><?= $lugarconadmin->admin_username ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
