<div class="container">
    <div class="row">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <div class="col-12">
            <h2>Lugares Turísticos</h2>


            <table class="table table-responsive table-striped">
                <thead>
                    <th>Nombre del Lugar</th>
                    <th>Descripción</th>
                    <th>Ubicación</th>

                </thead>
                <tbody>
                <?php foreach($lugares as $lugar): ?>
                    <tr>
                        <td><?=$lugar->nombre_lugar ?></td>
                        <td><?=$lugar->descripcion ?></td>
                        <td><?=$lugar->ubicacion ?></td>

                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
