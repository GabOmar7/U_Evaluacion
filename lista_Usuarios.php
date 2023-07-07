<?php 
include "Class/Operaciones.php";
$operacion = new Operaciones();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/estilos.css">
    <script src="https://kit.fontawesome.com/82a8f651e6.js" crossorigin="anonymous"></script>
</head>
<body>
    <script>
        function validacion(){
            var respuesta=confirm("seguro que deseas eliminar este usuario?");
            return respuesta
        }
    </script>
    <a href="Panel.php" class="btn btn-secondary ms-2 mt-2">Atras</a>
                <?php
                    $operacion->eliminar();
                ?>
    <div class="container-fluid d-flex justify-content-center">
        <div class="col-8 pt-4 ps-4">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                    <th scope="col">rut</th>
                    <th scope="col">nombres</th>
                    <th scope="col">apellido_paterno</th>
                    <th scope="col">apellido_materno</th>
                    <th scope="col">direccion</th>
                    <th scope="col">telefono</th>
                    <th scope="col">clave</th>
                    <th scope="col">Opciones</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        $operacion->listar();
                    ?>
                </tbody>
            </table>
            </div>
    </div>
</body>
</html>