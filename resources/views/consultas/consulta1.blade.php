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
        <h2>Consulta Relacionada 1</h2>
        <h3>Obtener usuarios con información de sus perfiles correspondientes:</h3>
        <div class="row justify-content-center">
            <br><br>
            <div class="col-6">
                <table class="table table-striped table-hover">
                    <thead>
                        <th>ID de usuario</th>
                        <th>Nombre de usuario</th>
                        <th>Contraseña</th>
                        <th>Estatus</th>
                        <th>No.Perfil</th>
                        <th>Fecha de creación</th>
                        <th>Perfil correspondiente</th>
                    </thead>
                    <tbody>
                        <?php foreach ($usuariosconperfiles as $usuarioconperfil) : ?>
                            <tr>
                                <td><?= $usuarioconperfil->users_id ?></td>
                                <td><?= $usuarioconperfil->username ?></td>
                                <td><?= $usuarioconperfil->password ?></td>
                                <td><?= $usuarioconperfil->status ?></td>
                                <td><?= $usuarioconperfil->profile ?></td>
                                <td><?= $usuarioconperfil->created_at ?></td>
                                <td><?= $usuarioconperfil->profile ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
