<?php 
//Si... el usuario presiona el botón de nombre "registro", entonces:
if(!empty($_POST["registro"])){
    if (empty($_POST["nombre"])or empty($_POST["apellido"]) or empty($_POST["usuario"])or empty($_POST["clave"])){
        echo'<div class="alerta">Uno de los campos está vacío</div>';
    }else{
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $usuario=$_POST["usuario"];
        $clave=$_POST["clave"];
        
        $sql=$conexion->query("insert into usuario (nombres,apellidos,usuario,clave)values('$nombre','$apellido','$usuario','$clave') ");
        if($sql==1){
            echo'<div class="alerta">Usuario Registrado Correctamente</div>';
        }else{
            echo'<div class="alerta">Error al Registrar</div>';
        }
    }
}

?>