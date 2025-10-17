<?php
    require_once("../../models/conexion.php");
    require_once("../../models/eventos.php");
    require_once("../../controllers/mostrarEventos.php");
    require_once("../../controllers/sesionAdministrador.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/assets/admin/styles.css">
</head>
<body>

     <header class="header evento">
        <div class="header-container">
            <div class="logo">
                <a href="../landing/index.php"><span>Bike</span></a>
            </div>
            <nav class="nav-tabs">
                <a href="dashboardAdmin.php" class="nav-tab">Bicicletas</a>
                <a href="dashboardAdminEvento.php" class="nav-tab active">Eventos</a>
            </nav>
            <div class="user-menu">
                <h5>Alejandro Hernandez</h5>
                <div class="user-avatar"><a href="../../controllers/cerrarSesion.php">X</a></div>
            </div>
        </div>
    </header>
        <div class="evento">
            <a class="evento" href="agregrarEventoAdmin.php">Registrar Evento</a>
        </div>
    <div class="container">
        
        <!-- <div class="row eventos">
            <div class="col-md-3">
                <div class="fecha">
                    <h2>25/10/2025</h2>
                </div>
            </div>
            <div class="col-md-6">
                <h3>Ciclo Paseo Por El Rio</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque, voluptatum!</p>
                <p>Punto De Encuentro: Parque Principal</p>
                <h4>Hora:8:00 AM</h4>
            </div>
            <div class="col-md-3">
                <a href="" class="eliminar">Eliminar</a>
                <a href="" class="editar">Editar</a>
            </div>
        </div> -->
        <?php
            cargarEventosAdmin();
        ?>
    </div>

  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>