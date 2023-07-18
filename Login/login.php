<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilos/Login.css">
    <title>Login | Nike</title>
</head>
<body>
    <div class="login-nike">
        <img class="avatar" src="../Estilos/nikelogo.jpg" alt="Logo Nike">
        <h1>Bienvenido</h1>
        
        <!--Se le agregó el controlador.php en action-->
        <form method="POST" action="controlador.php">

            <label for="username">Usuario</label>
            <input type="text" id="usuario" class="input" name="usuario" placeholder="Ingrese su usuario" required="">

            <label for="password">Contraseña</label>
            <input type="password" id="input" class="input" name="contra" placeholder="Ingrese su contraseña" required="">
            
            <input name="btningresar" class="btn" type="submit" value="INICIAR SESION">
            
            <a href="../Register/registro_usuario.php">Registrarse</a>     
        </form>
    </div>
</body>
</html>