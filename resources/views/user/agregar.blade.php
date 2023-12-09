<div class="container">
    <div class="row">

        <div class="col-8">
        <form action="/usuarios" method="POST">

        <input type='hidden' name= '_token' value='{{csrf_token()}}'

            <h2>Agregar Usuario</h2>


                <div class="mb-3">
                    <label for="username" class="form-label">Nombre de usuario</label>
                    <input type="text" class="form-control" name="username" id="username">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="text" class="form-control" name="password" id="password">
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Estatus</label>
                    <input type="boolean" class="form-control" name="status" id="status">
                </div>

                <div class="mb-3">
                    <label for="profile" class="form-label">Perfil</label>
                    <input type="int" class="form-control" name="profile" id="profile">
                </div>

                <div class="mb-3">
                    <label for="created_at" class="form-label">Fecha de creación</label>
                    <input type="date" class="form-control" name="created_at" id="created_at">
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>

            </form>

        </div>
    </div>
</div>
