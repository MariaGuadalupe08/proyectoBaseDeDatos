<div class="container">
    <div class="row">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <div class="col-12">
            <h2>Perfiles</h2>


            <table class="table table-responsive table-striped">
                <thead>
                    <th>Perfil</th>
                    <th>Descripción</th>
                    <th>Fecha de creación</th>

                </thead>
                <tbody>
                <?php foreach($profiles as $profile): ?>
                    <tr>
                        <td><?=$profile->profile ?></td>
                        <td><?=$profile->description?></td>
                        <td><?=$profile->created_at ?></td>

                        <td>
                        <form action="{{ route('profiles.eliminar', ['id' => $profile->profile_id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar este perfil?')">Eliminar</button>
                        </form>
                        </td>

                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
