<?php 
// paso 1: verificamos si se apreto el boton registro
if (isset($_POST['registro'])) {
    if (empty($_POST["nombre"])or empty($_POST["apellido"]) or empty($_POST["usuario"])or empty($_POST["clave"])){
        echo'<div class="alerta">Uno de los campos está vacío</div>';
    }// paso 2: verificamos que los datos no vengan vacios
    if ($_POST['nombre'] == '' || $_POST['apellido'] == '' || $_POST['usuario'] == '' || $_POST['clave'] == '') {

        echo 'Uno de los campos esta vacio';
        die();  //se finaliza la operacion para que no haga nada mas

    }
    include('../ConexionBD/conexion_bd.php');

    // paso 3: declaramos variables
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    // ingresamos los datos en la bd
    $queryIngresarDatos = mysqli_query($conexion, "INSERT INTO usuario (nombres,apellidos,usuario,clave) VALUES ('$nombre','$apellido','$usuario','$clave') ");


    // verificamos si los datos se insertaron correctamente
    if ($queryIngresarDatos) {
        echo "Datos Insertados";
    } else {
        echo "Algo salio mal   :(";
    }
}

?>