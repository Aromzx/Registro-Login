<?php 

if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombre_producto"]) and !empty($_POST["precio_producto"]) and !empty($_POST["fechadecompra"]) and !empty($_POST["email_usu"])){
        $nombrepro=$_POST["nombre_producto"];
        $preciopro=$_POST["precio_producto"];
        $fechadecompra=$_POST["fechadecompra"];
        $emailusu=$_POST["email_usu"];

        $sql=$conexion->query("insert into productos(nombre_pro, precio_pro, fechadecompra, email_usu)values('$nombrepro','$preciopro','$fechadecompra','$emailusu')");
        if ($sql==1) {
            echo '<div class="alert alert-success">¡Registrado Correctamente!</div>';
        } else {
            echo '<div class="alert alert-danger">¡Ocurrió un error al registrar!</div>';

        }
        
    }else{
        echo '<div class="alert alert-warning">¡Alguno de los campos está vacío!</div>';

    }
}

?>