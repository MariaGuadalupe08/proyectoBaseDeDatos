<div class="container">
    <div class="row">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <div class="col-12">
            <h2>Usuarios</h2>


            <table class="table table-responsive table-striped">
                <thead>
                    <th>Nombre</th>
                    <th>Contraseña</th>
                    <th>Estatus</th>
                    <th>Perfil</th>
                    <th>Fecha de creación</th>

                </thead>
                <tbody>
                <?php foreach($users as $user): ?>
                    <tr>
                        <td><?=$user->username?></td>
                        <td><?=$user->password ?></td>
                        <td><?=$user->status ?></td>
                        <td><?=$user->profile?></td>
                        <td><?=$user->created_at?></td>

                        <td>
                        <form action="{{ route('users.eliminar', ['id' => $user->users_id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?')">Eliminar</button>
                        </form>
                        </td>

                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
