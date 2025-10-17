<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Materialize CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">



    <link rel="stylesheet" href="../../public/assets/extras/styles.css">
</head>
<body>

    <section id="form">
        <div id="toggle-forms">
            <button class="waves-effect waves-light active" id="login">Login</button>
            <button class="waves-effect waves-light" id="register">Register</button>
        </div>
        <form class="col s12" action="../../controllers/iniciarSesion.php" method="POST">
            <div class="row center-align">
                <h4 class="white-text">login</h4>
            </div>
            <div class="row">
                <div class="input-field">
                    <input id="email" type="email" class="validate" name="email">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field">
                    <input id="password" type="password" class="validate" name="clave">
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field">
                    <select name="rol" id="">
                        <option value="">Seleccion un rol</option>
                        <option value="1">Cliente</option>
                        <option value="2">Administrador</option>
                    </select>
                </div>
            </div>
            <div class="row center-align">
                <button class="btn waves-effect waves-light" type="submit">
                    Login
                </button>
            </div>
									<a href="ressetPasword.php"><p class="forgot">Forgot Password?</p></a>
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
        <form class="col s12" action="../../controllers/registrarUsuarioCliente.php" method="POST">
            <div class="row center-align">
                <h4 class="white-text">register</h4>
            </div>

             <div class="row">
                <div class="input-field">
                    <input id="nombres" type="text" class="validate" name="nombres">
                    <label for="Nombres">Nombres</label>
                </div>
            </div>

             <div class="row">
                <div class="input-field">
                    <input id="apellidos" type="text" class="validate" name="apellidos">
                    <label for="apellidos">Apellidos</label>
                </div>
            </div>
            
            
           
            <div class="row">
                <div class="input-field">
                    <input id="email" type="email" class="validate" name="email">
                    <label for="email">Email</label>
                </div>
            </div>
             <div class="row">
                <div class="input-field">
                    <input id="telefono" type="number" class="validate" name="telefono">
                    <label for="telefono">Telefono</label>
                </div>
            </div>
             <div class="row">
                <div class="input-field">
                    <input id="identificacion" type="number" class="validate" name="identificacion">
                    <label for="identificacion">Identificacion</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field">
                    <input id="password" type="password" class="validate" name="clave">
                    <label for="password">Password</label>
                </div>
            </div>

             <div class="row">
                <div class="input-field">
                    <input id="password" type="number" class="validate" name="estrato">
                    <label for="password">Estrato(1-6)</label>
                </div>
            </div>
            
            
            
            <div class="row center-align">
                <button class="btn waves-effect waves-light" type="submit">
                    Register
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
    </section>


    <!-- Materialize JS (requiere jQuery) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
    let $id = (id) => document.getElementById(id);
    var [login, register, form] = ['login', 'register', 'form'].map(id => $id(id));

    [login, register].map(element => {
        element.onclick = function () {
            [login, register].map($ele => {
                $ele.classList.remove("active");
            });
            this.classList.add("active");
            this.getAttribute("id") === "register" ?  
                form.classList.add("active") : 
                form.classList.remove("active");
        }
    });
</script>

<!-- 🔧 Inicialización del select -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        M.FormSelect.init(elems);
    });
</script>


</body>
</html>