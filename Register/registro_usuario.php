<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilos/Registro.css">
    <title>Registro | Nike</title>
</head>
<body>  
    <div class="Register-nike">
        <img class="avatar" src="../Estilos/nikelogo.jpg" alt="Logo Nike">
        <br><br><br><h1>Registrate</h1>

        <!-- en el action pones la ruta donde quieres que se vayan los datos -->
        <form method="POST" action="./controlador_registrar_usuario.php">
            <!-- elimine el 'include' porque eso no se usa para enviar los datos -->
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" placeholder="Ingrese su nombre" required="">

            <label for="apellido">Apellido</label>                
            <input type="text" name="apellido" placeholder="Ingrese su apellido" required="">

            <label for="username">Usuario</label>
            <input type="text" name="usuario" placeholder="Ingrese su usuario" required="">

            <label for="password">Clave</label>
            <input type="password" name="clave" placeholder="Ingrese su clave" required="">

            <input type="submit" class="boton" value="Registrar" name="registro">

            <!-- antes:  href="Login/login.php"      depues: href="../Login/login.php"-->
            <a href="../Login/login.php">¿Ya tienes una cuenta?</a><br><br>
        
        </form>
    </div>
</body>
</html>