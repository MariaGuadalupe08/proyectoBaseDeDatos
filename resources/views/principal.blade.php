<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS y dependencias Popper.js y jQuery -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<style>
    body {
        padding-top: 56px;
    }

    .navbar {
        background-color: #007bff;
    }

    .navbar-brand,
    .navbar-nav .nav-link {
        color: #fff !important;
    }

    .navbar-toggler-icon {
        background-color: #fff;
    }

    .dropdown-menu {
        background-color: #007bff;
    }

    .dropdown-item {
        color: #fff !important;
    }

    .navbar-toggler {
        border: 1px solid #fff;
    }
</style>

<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Lugares Turíticos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/lugares/mostrar">Mostrar Lugares Turísticos</a></li>
            <li><a class="dropdown-item" href="lugares/agregar">Transacción: Agregar Lugares</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Festividades
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/festividades/mostrar">Mostrar festividades</a></li>
            <li><a class="dropdown-item" href="festividades/agregar">Transacción: Agregar festividad</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Gastronomia
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="comidas/mostrar">Mostrar Gastronomia</a></li>
            <li><a class="dropdown-item" href="gastronomias/agregar">Agregar Comida</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Hoteles
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="hoteles/mostrar">Mostrar Hoteles</a></li>
            <li><a class="dropdown-item" href="hoteles/agregar">Transacción: Agregar hotel</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Perfiles
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/perfiles/mostrar">Mostrar perfiles</a></li>
            <li><a class="dropdown-item" href="perfiles/agregar">Transacción: Agregar perfil</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         Usuarios
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/usuarios/mostrar">Mostrar usuarios</a></li>
            <li><a class="dropdown-item" href="usuarios/agregar">Transacción: Agregar usuario</a></li>
          </ul>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         Información de usuarios
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/informacion/mostrar">Mostrar información de usuario</a></li>
            <li><a class="dropdown-item" href="usuariosinfo/agregar">Transacción: Agregar información</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         Transacciones desde laravel
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/hoteles-transaccion1">Transacción 1:Agrega</a></li>
            <li><a class="dropdown-item" href="/actualizarhotel">Transacción 2:Actualiza</a></li>
            <li><a class="dropdown-item" href="/eliminar-hotel/{hotelId}">Transacción 3: Elimina</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Vistas de BD a Laravel
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/mostrarVista1">VISTA 1</a></li>
            <li><a class="dropdown-item" href="/mostrarVista2">VISTA 2</a></li>
            <li><a class="dropdown-item" href="/mostrarVista3">VISTA 3</a></li>
            <li><a class="dropdown-item" href="/mostrarVista4">VISTA 4</a></li>
            <li><a class="dropdown-item" href="/mostrarVista5">VISTA 5</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Consultas de BD a Laravel
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/mostrarConsulta1">CONSULTA 1</a></li>
            <li><a class="dropdown-item" href="/mostrarConsulta2">CONSULTA 2</a></li>
            <li><a class="dropdown-item" href="/mostrarConsulta3">CONSULTA 3</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Respaldo de Base
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/restaurar">CONSULTA 1</a></li>
          </ul>
        </li>

            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
