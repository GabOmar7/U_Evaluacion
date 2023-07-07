<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/estilos.css">
    <script src="https://kit.fontawesome.com/82a8f651e6.js" crossorigin="anonymous"></script>
</head>
<body>
    <a href="lista_Usuarios.php" class="btn btn-secondary ms-2 mt-2">VOLVER</a>
    <div class="container-fluid d-flex justify-content-center">
        <form class="col-3 ms-2" method="POST">
            <h2 class="text-center text-secondary">Modificar Usuario</h2>
            <?php
                $rut = $_GET["rut"];
                include "Class/Operaciones.php";
                $operacion = new Operaciones();
                $operacion->modificar($rut);
            ?>
            <button type="submit" name="btn-Modificar" class="btn btn-primary" value="ok">Modificar</button>     
        </form>
    </div>
</body>
</html>