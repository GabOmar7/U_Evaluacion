<?php
session_start();
if (!isset($_SESSION['rut'])) {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">QP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="CRUD.php">Crear Usuarios</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="lista_Usuarios.php">Listado Usuarios</a>
                </li>
            </ul>
            </div>
        </div>
        <div class="d-flex justify-content-end me-3">
            <a href="logout.php" class="btn btn-secondary">Salir</a>
        </div>
    </nav>
    </header>
    <div class="container-msgcentral">
        <h1>Bienvenido!</h1>
        <p>Esta es una página protegida, tranquilo, tu secreto está a salvo conmigo</p>
    </div>
</body>

</html>