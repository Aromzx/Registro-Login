<?php 

// paso 1:   detectar si se apreto el boton submit

// esto seria: 'si existe el dato btningresar, ingresa al if'
if (isset($_POST["btningresar"])) {

    // incluimos la conexion a la bd
    include('../ConexionBD/conexion_bd.php');

    
    // paso 2: detectar si los datos vienen vacios   (  || significa 'o' )
    if ($_POST['usuario'] == '' || $_POST['contra'] == '') {
        echo 'Datos vacios';
        die();   //aqui se detiene el procedimiento para que no haga nada mas, osea solo mostraria el mensaje de 'Datos vacios'
    }

     // paso 3: declarar las variables
     $usuario = $_POST['usuario'];
     $contra = $_POST['contra'];

     // paso 4: comparar el dato con una consulta  (ya incluimos el archivo de conexion arriba)
    $queryConsulta = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario = '$usuario' AND clave = '$contra' ");

    // paso 5: verificamos la cantidad de resultados que nos dio la consulta ( si nos da 0 es que no encontro el registro, si nos da >1 es que si encontro el registro)
    $contarRegistro = mysqli_num_rows($queryConsulta);
    
    if ($contarRegistro >= 1) {

        header('Location: ../Crud/index.php');

        // aqui puedes enviarlo a otro archivo si quieres
        // header('Location: ../otroArhivo.php');


    } else {
        echo "NO SE ENCONTRO EL DATO 😔";
        die();
    }
}