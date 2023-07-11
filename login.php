<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class=container>

        <form method="POST" action="">
            <h2 class="tittle">Bienvenido</h2>

            <?php 
            include("conexion_bd.php");
            include("controlador.php");
            ?>

            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Usuario</h5>   
                    <input type="text" id="usuario" class="input" name="usuario">
                </div>
                <div class="input-div pass">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5>Contraseña</h5>
                    <input type="password" id="input" class="input" name="password">
                </div>
            </div>
            <div class="view">
                <div class="fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>
            </div>
            <div class="text-center">
                <a class="font-italic isai5" href="registro_usuario.php">Registrarse</a><br><br>
            </div>
                <input name="btningresar" class="btn" type="submit" value="INICIAR SESION">
        </form>
    </div>
</body>
</html>