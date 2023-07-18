<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <!--CSS only-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/53ab1d7642.js" crossorigin="anonymous"></script>
</head>

<body>
    <script>
        function eliminar(){
            var respuesta=confirm("¿Estas seguro que deseas eliminar?")
            return respuesta
        }
    </script>
    <h1 class="text-center">CRUD</h1>
    <?php 
    include("../ConexionBD/conexion_bd.php");
    include("controlador/eliminar_pro.php");
    
    ?>
    <div class="container-fluid row">

        <form class="col-4 p-3" method="post">
            <h3 class="text-center text-secondary">Datos del producto</h3>
            <?php
            include("./controlador/registro_pro.php");
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre del producto</label>
                <input type="text" class="form-control" name="nombre_producto">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Precio del Producto</label>
                <input type="number" class="form-control" name="precio_producto">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de compra</label>
                <input type="date" class="form-control" name="fechadecompra">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email del usuario</label>
                <input type="email" class="form-control" name="email_usu">
            </div>

            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>

        <div class="col-8 p-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NombreProducto</th>
                        <th scope="col">Precio</th>
                        <th scope="col">FechaDeCompra</th>
                        <th scope="col">CorreoUsuario</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('../ConexionBD/conexion_bd.php');
                    $sql = $conexion->query("select * from productos");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td><?= $datos->id_pro ?></td>
                            <td><?= $datos->nombre_pro ?></td>
                            <td><?= $datos->precio_pro ?></td>
                            <td><?= $datos->fechadecompra ?></td>
                            <td><?= $datos->email_usu ?></td>
                            <td>
                                <a href="editar_producto.php?id=<?= $datos->id_pro ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return eliminar()" href="index.php?id=<?= $datos->id_pro ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php }
                    ?>

                </tbody>
            </table>
        </div>
    </div>

    <!--JavaScript Bundle with Popper-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>