<div class="container">
    <div class="row">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <div class="col-12">
            <h2>Festividades</h2>


            <table class="table table-responsive table-striped">
                <thead>
                    <th>Nombre de la festividad</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>atracciones</th>
                    <th>Fecha de festividad</th>

                </thead>
                <tbody>
                <?php foreach($festividades as $festividad): ?>
                    <tr>
                        <td><?=$festividad->nombre_festividad ?></td>
                        <td><?=$festividad->descripcion ?></td>
                        <td><?=$festividad->precio ?></td>
                        <td><?=$festividad->atracciones ?></td>
                        <td><?=$festividad->fecha ?></td>

                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
