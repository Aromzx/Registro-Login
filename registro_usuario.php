<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <div class="container">

        <form action="" method="post" class="formulario">

            <h2 class="titulo">Registrate</h2>
            <?php
            include("conexion_bd.php");
            include("controlador_registrar_usuario.php");
            ?>
            <div class="padre">

                <div class="nombre">

                    <label for="">Nombre</label>
                    <input type="text" name="nombre">

                </div>
                <div class="apellido">

                    <label for="">Apellido</label>                
                    <input type="text" name="apellido">

                </div>
                <div class="usuario">

                    <label for="">Usuario</label>
                    <input type="text" name="usuario">

                </div>
                <div class="clave">

                    <label for="">Clave</label>
                    <input type="password" name="clave">

                </div>
                <div class="cuenta">

                    <input type="submit" class="boton" value="Registrar" name="registro">
                    <a href="login.php">Salir</a>

                </div>
            </div>
        </form>

    </div>
</body>
</html>