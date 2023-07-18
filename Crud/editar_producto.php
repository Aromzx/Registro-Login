<?php 
include("../ConexionBD/conexion_bd.php");
$id=$_GET["id"];
$sql=$conexion->query("select * from productos where id_pro=$id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> 
</head>
<body>
<form class="col-4 p-3 m-auto" method="post">
            <h5 class="text-center alert alert-secondary">Modificar Productos</h5>
            <input type="hidden" name="id" value="<?= $_GET["id"]?>">
            <?php
            include("./controlador/modificar_pro.php");
            while($datos=$sql->fetch_object()){?>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre del producto</label>
                <input type="text" class="form-control" name="nombre_producto" value="<?= $datos->nombre_pro?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Precio del Producto</label>
                <input type="number" class="form-control" name="precio_producto" value="<?= $datos->precio_pro?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de compra</label>
                <input type="date" class="form-control" name="fechadecompra" value="<?= $datos->fechadecompra?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email del usuario</label>
                <input type="email" class="form-control" name="email_usu" value="<?= $datos->email_usu?>">
            </div>
            <?php }
            ?>
            

            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar Producto</button>
        </form>
</body>
</html>