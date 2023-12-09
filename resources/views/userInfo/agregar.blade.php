<div class="container">
    <div class="row">

        <div class="col-8">
        <form action="/usuariosinfo" method="POST">

        <input type='hidden' name= '_token' value='{{csrf_token()}}'

            <h2>Agregar información de usuarios</h2>


                <div class="mb-3">
                    <label for="name" class="form-label">Nombre de usuario</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>

                <div class="mb-3">
                    <label for="lastname" class="form-label">Apellido</label>
                    <input type="text" class="form-control" name="lastname" id="lastname">
                </div>

                <div class="mb-3">
                    <label for="birthday" class="form-label">Cumpleaños</label>
                    <input type="date" class="form-control" name="birthday" id="birthday">
                </div>

                <div class="mb-3">
                    <label for="gender" class="form-label">Genero</label>
                    <input type="text" class="form-control" name="gender" id="gender">
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Telefono</label>
                    <input type="text" class="form-control" name="phone" id="phone">
                </div>

                <div class="mb-3">
                    <label for="bio" class="form-label">Biografía</label>
                    <input type="text" class="form-control" name="bio" id="bio">
                </div>

                <div class="mb-3">
                    <label for="website" class="form-label">Correo</label>
                    <input type="text" class="form-control" name="website" id="website">
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Estatus</label>
                    <input type="boolean" class="form-control" name="status" id="status">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>

            </form>

        </div>
    </div>
</div>
