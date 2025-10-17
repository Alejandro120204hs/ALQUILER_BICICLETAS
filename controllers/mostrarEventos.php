<?php

    // DECLARO LA FUNCION 
    function cargarEventosCliente(){
        // CREAMOS EL OBJETO PARA ALMACENAR LOS DATOS
        $objetoEvento = new Eventos();
        $datos = $objetoEvento -> visualizarEventos();

        if(empty($datos)){
            echo"<h2>No hay eventos registrados</h2>";
        }else{
            foreach($datos as $f){
                echo'
                
                
                <div class="row eventos">
                    <div class="col-md-3">
                        <div class="fecha">
                            <h2>'.$f['fecha'].'</h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>'.$f['nombre'].'</h3>
                        <p>'.$f['descripcion'].'</p>
                        <p>'.$f['lugar'].'</p>
                        <h4>Hora: '.$f['hora'].'</h4>
                    </div>
                    <div class="col-md-3 inscribirse">
                          <a href="../../controllers/inscribirCiclopaseo.php?idCiclopaseo='.$f['id'].'" class="inscribirse">Inscribirse</a>
                    </div>
                </div>
                
                
                ';
            }
        }
    }

    // DECLARO LA FUNCION
    function cargarEventosAdmin(){
        // CREAMOS EL OBJETO PARA ALMACENAR LOS DATOS
        $objetoEvento = new Eventos();
        $datos = $objetoEvento -> visualizarEventos();

        if(empty($datos)){
            echo"<h2>No hay eventos registrados</h2>";
        }else{
            foreach($datos as $f){
                echo'
                
                    <div class="row eventos">
                        <div class="col-md-3">
                            <div class="fecha">
                                <h2>'.$f['fecha'].'</h2>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3>'.$f['nombre'].'</h3>
                            <p>'.$f['descripcion'].'</p>
                            <p>'.$f['lugar'].'</p>
                            <h4>Hora: '.$f['hora'].'</h4>
                        </div>
                        <div class="col-md-3">
                            <a href="../../controllers/eliminarEvento.php?idEvento='.$f['id'].'" class="eliminar">Eliminar</a>
                            <a href="editarEventoAdmin.php?idEvento='.$f['id'].'" class="editar">Editar</a>
                        </div>
                    </div>
                
                ';
            }
        }
    }

    function cargarEventosId(){
        // CAPTURAMOS LA VARIABLE A TARAVEZ DEL METODO GET
        $id_e = $_GET['idEvento'];

        // PROGRAMACION ORIENTADA A OBJETOS
        // ACCEDEMOS A LA FUNCION
        $objetoEvento = new Eventos();
        $resultado = $objetoEvento -> visualizarEventosId($id_e);

        echo'
        
        
         <form class="registrar" action="../../controllers/editarEvento.php" method="POST">

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" hidden>Id</label>
                <input type="text" class="form-control" hidden="exampleInputEmail1" aria-describedby="emailHelp" name="id" value="'.$resultado['id'].'">
               
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombre" value="'.$resultado['nombre'].'">
               
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="descripcion" value="'.$resultado['descripcion'].'">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="exampleInputPassword1" name="fecha" value="'.$resultado['fecha'].'">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Hora</label>
                <input type="time" class="form-control" id="exampleInputPassword1" name="hora" value="'.$resultado['hora'].'">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Lugar</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="lugar" value="'.$resultado['lugar'].'">
            </div>
           
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
        
        ';
    }

?>