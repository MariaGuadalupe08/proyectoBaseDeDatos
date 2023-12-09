<div class="container">
    <div class="row">

        <div class="col-8">
        <form action="/hoteles" method="POST">

        <input type='hidden' name= '_token' value='{{csrf_token()}}'

            <h2>Agregar Hotel</h2>


                <div class="mb-3">
                    <label for="nombre_hotel" class="form-label">Nombre del hotel</label>
                    <input type="text" class="form-control" name="nombre_hotel" id="nombre_hotel">
                </div>

                <div class="mb-3">
                    <label for="direccion" class="form-label">Direccion</label>
                    <input type="text" class="form-control" name="direccion" id="direccion">
                </div>

                <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control" name="telefono" id="telefono">
                </div>


                <div class="mb-3">
                    <label for="precio_hospedaje" class="form-label">Precio de hospedaje</label>
                    <input type="double" class="form-control" name="precio_hospedaje" id="precio_hospedaje">
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción </label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion">
                </div>

                <div class="mb-3">
                    <label for="estrellas" class="form-label">Estrellas (calificación) </label>
                    <input type="int" class="form-control" name="estrellas" id="estrellas">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>

            </form>

        </div>
    </div>
</div>
