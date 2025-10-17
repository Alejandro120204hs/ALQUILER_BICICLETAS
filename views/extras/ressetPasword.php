<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">



    <link rel="stylesheet" href="../../public/assets/extras/styles.css">
</head>
<body>

      <section id="form">
       
        <form class="col s12" action="../../controllers/recuperarContraseña.php" method="POST">
            <div class="row center-align">
                <h4 class="white-text">Recuperar Contraseña</h4>
            </div>
            <div class="row">
                <div class="input-field">
                    <input id="identificacion" type="number" class="validate" name="identificacion">
                    <label for="identificacion">Identificacion</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field">
                    <input id="email" type="email" class="validate" name="email">
                    <label for="email">Correo</label>
                </div>
            </div>
            <div class="row center-align">
                <button class="btn waves-effect waves-light" type="submit">
                    Enviar
                </button>
            </div>
									
            <ul class="animate">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </form>
        <form class="col s12" >
            
        </form>
    </section>
    

        <!-- Materialize JS (requiere jQuery) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>