<div class="container">
    <div class="row">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <div class="col-12">
            <h2>Información de Usuarios</h2>


            <table class="table table-responsive table-striped">
                <thead>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cumpleaños</th>
                    <th>Genero</th>
                    <th>Telefono</th>
                    <th>Biografía</th>
                    <th>Correo</th>
                    <th>Estatus</th>

                </thead>
                <tbody>
                <?php foreach($usersinfo as $users): ?>
                    <tr>
                        <td><?=$users->name?></td>
                        <td><?=$users->lastname ?></td>
                        <td><?=$users->birthday ?></td>
                        <td><?=$users->gender ?></td>
                        <td><?=$users->phone?></td>
                        <td><?=$users->bio?></td>
                        <td><?=$users->website?></td>
                        <td><?=$users->status?></td>

                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
