<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/estilos.css">
    <script src="https://kit.fontawesome.com/82a8f651e6.js" crossorigin="anonymous"></script>
</head>
<body>
    <a href="Panel.php" class="btn btn-secondary ms-2 mt-2">VOLVER</a>
    <h1 class="text-center p-3" >Ingreso de Usuarios</h1>
    <div class="container-fluid d-flex justify-content-center">
        <form class="col-3 ms-2" method="POST">
            <h2 class="text-center text-secondary">Registrar Usuarios</h2>
            <?PHP
                include "Class/Operaciones.php";
                $Registro = new Operaciones();
                $Registro->registrar();
            ?>
            <div class="mb-3">
                <label class="form-label">RUT</label>
                <input type="text" name="rut" class="form-control" maxlength="9">
            </div>
            <div class="mb-3">
                <label class="form-label">Nombres</label>
                <input type="text" name="nombres" class="form-control" >
            </div>
            <div class="mb-3">
                <label class="form-label">Apellido Paterno</label>
                <input type="text" name="apellido_paterno" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Apellido Materno</label>
                <input type="text" name="apellido_materno" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Direccion</label>
                <input type="text" name="direccion" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Telefono</label>
                <input type="text" name="telefono" class="form-control" maxlength="9">
            </div><div class="mb-3">
                <label class="form-label">Clave</label>
                <input type="password" name="clave" class="form-control" maxlength="15">
            </div>
            <button type="submit" name="btn-Enviar" value="ok" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>
</html>