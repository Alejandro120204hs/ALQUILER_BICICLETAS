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
    <title>Gestion De Bicicletas</title>
    <!-- CSS BOOTSRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- CSS DATATABLE EXPORT -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.4/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.2.5/css/buttons.dataTables.css">
    <!-- CSS PROPIO -->
    <link rel="stylesheet" href="../../public/assets/admin/styles.css">
</head>
<body>

     <header class="header">
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

    <main class="main-container">
       <div class="container">
         <div id="bikes" class="tab-content active">
            <div class="section-header">
                <h1 class="section-title">Bicicletas</h1>
                <p class="section-subtitle"><a class="agregar" href="agregarBicicletaAdmin.php">Agregar Bicicleta</a></p>
            </div>
            <table class="table" id="tabla">
            <thead>
                <tr>
                <th scope="col">Marca</th>
                <th scope="col">Estado</th>
                <th scope="col">Precio</th>
                <th scope="col">Color</th>
                <th scope="col">Foto</th>
                <th scope="col" class="accion">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    cargarBicicletasAdmin();
            ?>
            </tbody>
        </table>
         </div>
            
       </div>

    </main>

<!-- SCRIPT BOOTSRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

<!-- ScRIPT DATATABLE SPORT -->
    
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.3.4/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.5/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.5/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.5/js/buttons../../controllers/cerrarSesion.php5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.5/js/buttons.print.min.js"></script>

    <!-- <script>
        new DataTable('#tabla', {
            layout: {
                topStart: {
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                }
            }
        });
    </script> -->

    <script>
        new DataTable('#tabla', {
            layout: {
                topStart: {
                    buttons: [
                        {
                            extend: 'excel',
                            text: 'Exportar a Excel',
                            title: 'Listado de Usuarios',
                            filename: 'usuarios_excel'
                        },
                        {
                            extend: 'pdf',
                            text: 'Exportar a PDF',
                            title: 'Listado de Usuarios',
                            filename: 'usuarios_pdf',
                            orientation: 'landscape',
                            pageSize: 'A4',
                            customize: function (doc) {
                                // Ajustar ancho de la tabla al 100%
                                doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1)
                                    .join('*')
                                    .split('');

                                // Mantienes tus personalizaciones anteriores
                                doc.styles.tableHeader.fillColor = '#4CAF50';
                                doc.styles.tableHeader.color = 'white';
                                doc.styles.title = { fontSize: 14, bold: true, alignment: 'center' };
                                doc.content.splice(0, 0, {
                                    text: 'Reporte de Usuarios\n\n',
                                    style: 'title'
                                });
                            }
                        },
                        {
                            extend: 'csv',
                            text: 'Exportar CSV',
                            filename: 'usuarios_csv'
                        },
                        {
                            extend: 'copy',
                            text: 'Copiar'
                        },
                        {
                            extend: 'print',
                            text: 'Imprimir',
                            title: 'Listado de Usuarios'
                        }
                    ]
                }
            },
            language: {
                url: 'https://cdn.datatables.net/plug-ins/2.0.3/i18n/es-ES.json'
            }
        });

    </script>

</body>
</html>