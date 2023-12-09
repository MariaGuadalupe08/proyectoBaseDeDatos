<div class="container">
    <div class="row">

        <div class="col-8">
        <form action="/lugares" method="POST">

        <input type='hidden' name= '_token' value='{{csrf_token()}}'

            <h2>Agregar lugar Turístico</h2>


                <div class="mb-3">
                    <label for="nombre_lugar" class="form-label">Nombre del lugar</label>
                    <input type="text" class="form-control" name="nombre_lugar" id="nombre_lugar">
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion">
                </div>

                <div class="mb-3">
                    <label for="ubicacion" class="form-label">Ubicación</label>
                    <input type="text" class="form-control" name="ubicacion" id="ubicacion">
                </div>


                <div class="mb-3">
                    <label for="horario" class="form-label">Horarios</label>
                    <input type="text" class="form-control" name="horario" id="horario">
                </div>

                <div class="mb-3">
                    <label for="costo_entrada" class="form-label">Costo de entrada </label>
                    <input type="double" class="form-control" name="costo_entrada" id="costo_entrada">
                </div>

                <div class="mb-3">
                <input type="submit" value="Agregar Lugar">
                </div>

            </form>

        </div>
    </div>
</div>
