<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS y dependencias Popper.js y jQuery -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<style>
    body {
        padding-top: 20px;
    }

    .nav-section {
        background-color: #fafaca;
        border: 1px solid #dee2e6;
        border-radius: 8px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        padding: 20px;
    }

    h1 {
        color: #f98903;
        font-size: 24px;
        margin-bottom: 20px;
    }

    .nav-link {
        color: #1e7a1a;
        font-weight: bold;
        font-size: 18px;
        text-decoration: none;
        display: block;
        margin-bottom: 10px;
        transition: color 0.3s ease;
    }

    .nav-link:hover {
        color: #0056b3;
    }
</style>

<div class="container">

    <div class="nav-section">
        <h1>VISUALIZAR BASE DE DATOS COMPLETA</h1>
        <a href="/BaseDeDatosCompleta" class="nav-link">Visualizar Base de Datos</a>
    </div>

    <div class="nav-section">
        <h1>Lugares Turísticos</h1>
        <a href="/lugares/mostrar" class="nav-link">Mostrar Lugares Turísticos</a>
        <a href="lugares/agregar" class="nav-link">Agregar Lugares turíticos</a>
    </div>

    <div class="nav-section">
        <h1>Festividades en Teziutlán</h1>
        <a href="/festividades/mostrar" class="nav-link">Mostrar Festividades</a>
        <a href="festividades/agregar" class="nav-link">Agregar festividades</a>
    </div>

    <div class="nav-section">
        <h1>Gastronomía en Teziutlán</h1>
        <a href="comidas/mostrar" class="nav-link">Mostrar gastronomía</a>
        <a href="gastronomias/agregar" class="nav-link">Agregar nueva comida</a>
    </div>

    <div class="nav-section">
        <h1>Hoteles en Teziutlán</h1>
        <a href="hoteles/mostrar" class="nav-link">Mostrar Hoteles</a>
        <a href="hoteles/agregar" class="nav-link">Agregar hotel nuevo</a>
    </div>

    <div class="nav-section">
        <h1>Perfiles</h1>
        <a href="/perfiles/mostrar" class="nav-link">Mostrar perfiles</a>
        <a href="perfiles/agregar" class="nav-link">Agregar perfiles</a>
    </div>

    <div class="nav-section">
        <h1>Usuarios</h1>
        <a href="/usuarios/mostrar" class="nav-link">Mostrar usuarios</a>
        <a href="usuarios/agregar" class="nav-link">Agregar usuario nuevo</a>
    </div>

    <div class="nav-section">
        <h1>Información de Usuarios</h1>
        <a href="/informacion/mostrar" class="nav-link">Mostrar información de usuarios</a>
        <a href="usuariosinfo/agregar" class="nav-link">Agregar informacion de usuarios</a>
    </div>

    <div class="nav-section">
        <h1>Transacciones desde Laravel</h1>
        <a href="/hoteles-transaccion1" class="nav-link">Transacción: Agregar nuevo hotel</a>
        <a href="/actualizarhotel" class="nav-link">Transacción: Actualizar hotel</a>
        <a href="/eliminar-hotel/{hotelId}" class="nav-link">Transacción: Eliminar hotel</a>
    </div>

    <div class="nav-section">
        <h1>VISTAS DE BD EN LARAVEL</h1>
        <a href="/mostrarVista1" class="nav-link">VISTA 1</a>
        <a href="/mostrarVista2" class="nav-link">VISTA 2</a>
        <a href="/mostrarVista3" class="nav-link">VISTA 3</a>
        <a href="/mostrarVista4" class="nav-link">VISTA 4</a>
        <a href="/mostrarVista5" class="nav-link">VISTA 5</a>
    </div>

    <div class="nav-section">
        <h1>CONSULTAS DE BD EN LARAVEL</h1>
        <a href="/mostrarConsulta1" class="nav-link">CONSULTA 1</a>
        <a href="/mostrarConsulta2" class="nav-link">CONSULTA 2</a>
        <a href="/mostrarConsulta3" class="nav-link">CONSULTA 3</a>
    </div>

    <div class="nav-section">
        <h1>RESPALDO DE BD</h1>
        <a href="/restaurar" class="nav-link">DA CLICK PARA HACER UN RESPALDO</a>
    </div>


</div>
