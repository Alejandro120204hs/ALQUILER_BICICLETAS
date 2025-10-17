<?php
    require_once("../../models/conexion.php");
    require_once("../../models/bicicletas.php");
    require_once("../../controllers/mostrarBicicletas.php");
    require_once("../../controllers/sesionCliente.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/assets/cliente/styles.css">
</head>
<body>

     <header class="header">
        <div class="header-container">
            <div class="logo">
                <a href="../landing/index.php"><span>Bike</span></a>
            </div>
            <nav class="nav-tabs">
                <a href="dashboardCliente.php" class="nav-tab active">Bicicletas</a>
                <a href="dashboardClienteEvento.php" class="nav-tab">Eventos</a>
            </nav>
            <div class="user-menu">
                <div class="user-avatar"><a href="../../controllers/cerrarSesion.php">X</a></div>
            </div>
        </div>
    </header>

    <main class="main-container">
        <div id="bikes" class="tab-content active">
            <div class="section-header">
                <h1 class="section-title">Bicicletas</h1>
                <p class="section-subtitle">NUESTRAS BICICLETAS</p>
            </div>

            <div class="bikes-grid">
                <!-- <div class="bike-card">
                    <div class="bike-image-container">
                        <span class="status-badge status-disponible">Disponible</span>
                        <img src="../../public/assets/landing/img/cicla.png" alt="Bicicleta">
                    </div>
                    <div class="bike-content">
                        <div class="bike-model">GW - Disponible</div>
                        <div class="bike-details">
                            <div class="bike-detail-item">
                                <span class="bike-detail-label">Color:</span>
                                <span class="bike-detail-value">Rojo</span>
                            </div>
                        </div>
                        <div class="bike-footer">
                            <div>
                                <div class="bike-price">$20000</div>
                                <span class="price-label">por hora</span>
                            </div>
                            <a href="#modal-rental" class="btn btn-primary">
                                Adquirir →
                            </a>
                        </div>
                    </div>
                </div> -->

                <?php
                    cargarBicicletasCliente();
                ?>
            </div>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>