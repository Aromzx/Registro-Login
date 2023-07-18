<?php 

if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombre_producto"]) and !empty($_POST["precio_producto"]) and !empty($_POST["fechadecompra"]) and !empty($_POST["email_usu"])){
        $id=$_POST["id"];
        $nombre=$_POST["nombre_producto"];
        $precio=$_POST["precio_producto"];
        $fecha=$_POST["fechadecompra"];
        $email=$_POST["email_usu"];
        $sql=$conexion->query("update productos set nombre_pro='$nombre', precio_pro='$precio', fechadecompra='$fecha', email_usu='$email' where id_pro=$id ");
        if($sql==1){
            header("location:./index.php");
        }else{
            echo"<div class='alert alert-danger'>Error al modificar producto</div>";

        }
    }else{
        echo"<div class='alert alert-warning'>Campos Vacíos</div>";
    }
}

?>