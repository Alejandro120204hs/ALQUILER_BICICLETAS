<?php

    // DECLARAMOS LA FUNCION
    function cargarBicicletasCliente(){
        // CREAMOS EL OBJETO PARA ALMACENAR LOS DATOS
        $objetoBicicleta = new Bicicletas();
        $datos = $objetoBicicleta -> mostrarBicicletasCliente();

        if(empty($datos)){
            echo"<h2>No hay bicicletas registradas</h2>";
        }else{
            foreach($datos as $f){
                echo'
            
                <div class="bike-card">
                        <div class="bike-image-container">
                            <span class="status-badge status-disponible">'.$f['estado'].'</span>
                            <img src="../'.$f['foto'].'" alt="Bicicleta" width="100%">
                        </div>
                        <div class="bike-content">
                            <div class="bike-model">'.$f['marca'].' - '.$f['estado'].'</div>
                            <div class="bike-details">
                                <div class="bike-detail-item">
                                    <span class="bike-detail-label">Color:</span>
                                    <span class="bike-detail-value">'.$f['color'].'</span>
                                </div>
                            </div>
                            <div class="bike-footer">
                                <div>
                                    <div class="bike-price">$'.$f['precio_alquiler'].'</div>
                                    <span class="price-label">por hora</span>
                                </div>
                                <a href="../../controllers/alquilarBicicleta.php?idBicicleta='.$f['id'].'&precio='.$f['precio_alquiler'].'" class="btn btn-primary">
                                    Adquirir →
                                </a>
                            </div>
                        </div>
                </div>
            
            ';
            }
            
        }
    }

    // DECLARAMOS LA FUNCION
    function cargarBicicletasAdmin(){
        // CREAMOS EL OBJETO PARA ALMACENAR LOS DATOS
        $objetoBicicleta = new Bicicletas();
        $datos = $objetoBicicleta -> mostrarBicicletasAdmin();

        if(empty($datos)){
            echo"<h2>No hay bicicletas registradas</h2>";
        }else{
           
            foreach($datos as $f){
                echo'
                
            
                <tr>
                <th scope="row">'.$f['marca'].'</th>
                <td>'.$f['estado'].'</td>
                <td>'.$f['precio_alquiler'].'</td>
                <td>'.$f['color'].'</td>
                <td> <img src="../'.$f['foto'].'" alt="Bicicleta" width="50px" height="50px"></td>
                <td> <a href="../../controllers/eliminarBicicleta.php?idBicicleta='.$f['id'].'" class="eliminar" >Eliminar</a>  <a href="editarBicicletaAdmin.php?idBicicleta='.$f['id'].'" class="editar">Editar</a></td>
                </tr>
            
                
                ';
            }
        }
    }

    function mostrarBicicletaId(){
        // CAPTURAMOS LA VARIABLE ENVIADO POR METOD GET
        $id_b = $_GET['idBicicleta'];

        // PROGRAMACION ORIENTADA A OBJETOS 
        // ACCEDEMOS A LA FUNCION
        $objetoBicicleta = new Bicicletas();
        $resultado = $objetoBicicleta -> consultarBicicleta($id_b);

        echo'
        
             <form class="registrar" action="../../controllers/editarBicicletas.php" method="POST" enctype="multipart/form-data">

             <div class="mb-3">
                <label for="exampleInputEmail1" hidden class="form-label">Marca</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" hidden value="'.$resultado['id'].'">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Marca</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="marca" value="'.$resultado['marca'].'">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Estado</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="estado" value="'.$resultado['estado'].'">
               
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Precio</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="precio" value="'.$resultado['precio_alquiler'].'">
            </div>


            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Color</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="color" value="'.$resultado['color'].'">
            </div>
           
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
        
        ';
    }

?>