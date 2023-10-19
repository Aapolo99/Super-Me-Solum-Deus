<?php
    include './config.php';
    $url_base="../../conexion.php";
?>

<!doctype html>
<html lang="en">

<head>
  <title>Super Me Solum Deus</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand navbar-dark bg-dark">
    <ul class="nav navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" href="<?= ROOT ?>/vistas/home1.php" aria-current="page">Super Me Solum Deus<span class="visually-hidden">(current)</span></a></li>
            <li class="nav-item">
            <a class="nav-link active" href="<?= ROOT ?>/modulos/usuarios/user.php" aria-current="page">Usuarios<span class="visually-hidden">(current)</span></a></li>
            <li class="nav-item">
            <a class="nav-link active" href="<?= ROOT ?>/modulos/listaPrecios/lista.php" aria-current="page">Lista De Precios<span class="visually-hidden">(current)</span></a></li>
            <li class="nav-item">
            <a class="nav-link active" href="<?= ROOT ?>/modulos/reservas/reservas.php" aria-current="page">Reservas<span class="visually-hidden">(current)</span></a></li>
            <li class="nav-item">
            <a class="nav-link active" href="<?= ROOT ?>/includes/logout.php" aria-current="page">Cerrar Sesion<span class="visually-hidden">(current)</span></a></li>
    </ul>
</nav>
<main class="container">
    <br><br>