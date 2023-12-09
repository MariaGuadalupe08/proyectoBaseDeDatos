<div class="container">
    <div class="row">

        <div class="col-8">
        <form action="/perfiles" method="POST">

        <input type='hidden' name= '_token' value='{{csrf_token()}}'

            <h2>Agregar Hotel</h2>


                <div class="mb-3">
                    <label for="profile" class="form-label">Perfil</label>
                    <input type="text" class="form-control" name="profile" id="profile">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descripción</label>
                    <input type="text" class="form-control" name="description" id="description">
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
