<div class="container">
    <div class="row">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <div class="col-12">
            <h2>Gastronomía de la región</h2>


            <table class="table table-responsive table-striped">
                <thead>
                    <th>Nombre del Lugar</th>
                    <th>Descripción</th>
                    <th>Ubicación</th>

                </thead>
                <tbody>
                <?php foreach($gastronomias as $gastronomia): ?>
                    <tr>
                        <td><?=$gastronomia->nombre_restaurante ?></td>
                        <td><?=$gastronomia->tipo_comida ?></td>
                        <td><?=$gastronomia->tipo_cocina ?></td>
                        <td><?=$gastronomia->capacidad ?></td>
                        <td><?=$gastronomia->direccion ?></td>
                        <td><?=$gastronomia->telefono ?></td>
                        <td><?=$gastronomia->descripcion ?></td>

                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
