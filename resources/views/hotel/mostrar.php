<div class="container">
    <div class="row">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <div class="col-12">
            <h2>Hoteles en Teziutlán</h2>


            <table class="table table-responsive table-striped">
                <thead>
                    <th>Hotel</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Precio del hospedaje</th>
                    <th>Descripción</th>
                    <th>Estrellas de calificación</th>

                </thead>
                <tbody>
                <?php foreach($hoteles as $hotel): ?>
                    <tr>
                        <td><?=$hotel->nombre_hotel?></td>
                        <td><?=$hotel->direccion ?></td>
                        <td><?=$hotel->telefono ?></td>
                        <td><?=$hotel->precio_hospedaje?></td>
                        <td><?=$hotel->descripcion?></td>
                        <td><?=$hotel->estrellas?></td>

                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
