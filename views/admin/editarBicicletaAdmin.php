<?php
    require_once("../../models/conexion.php");
    require_once("../../models/bicicletas.php");
    require_once("../../controllers/mostrarBicicletas.php");
    require_once("../../controllers/sesionAdministrador.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/assets/admin/agregar.css">
</head>
<body>

     <header class="header evento">
        <div class="header-container">
            <div class="logo">
                <a href="../landing/index.php"><span>Bike</span></a>
            </div>
            <nav class="nav-tabs bicicleta">
                <a href="dashboardAdmin.php" class="nav-tab active">Bicicletas</a>
                <a href="dashboardAdminEvento.php" class="nav-tab">Eventos</a>
            </nav>
            <div class="user-menu">
                <h5>Alejandro Hernandez</h5>
                <div class="user-avatar"><a href="../../controllers/cerrarSesion.php">X</a></div>
            </div>
        </div>
        </header>

        <main>
            <div class="container">

                <h1>Editar Bicicletas</h1>
                
                <?php
                    mostrarBicicletaId()
                ?>
            </div>
        </main>

       
  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>