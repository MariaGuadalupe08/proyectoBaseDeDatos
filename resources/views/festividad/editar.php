<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Editar Festividad</h2>
            <form action="festividades/update" method="POST">
            <?= csrf_field() ?>
            <input type="hidden" name="id" value="<?=$festividad->festividad_id ?>" />
                <div class="mb-3">
                    <label for="nombre_festividad" class="form-label">Nombre de la festividad</label>
                    <input type="text" class="form-control" name="nombre_festividad" id="nombre_festividad" value=<?=$festividad->nombre_festividad ?>>
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" class="form-control" name="descripcion"
                    id="descripcion"  value=<?=$festividad->descripcion ?>>
                </div>

                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="text" class="form-control" name="precio"
                    id="precio"  value=<?=$festividad->precio ?>>
                </div>

                <div class="mb-3">
                    <label for="atracciones" class="form-label">Atracciones</label>
                    <input type="double" class="form-control" name="atracciones"
                    id="atracciones"  value=<?=$festividad->atracciones ?>>
                </div>

                <div class="mb-3">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="text" class="form-control" name="fecha"
                    id="fecha"  value=<?=$festividad->fecha ?>>
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>


            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>
