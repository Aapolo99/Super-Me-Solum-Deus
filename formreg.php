<?php
        include("registrar.php");
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resgistrar</title>
    <link rel="stylesheet" href="./css/style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/862c9abe55.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/login2.css">

</head>
<body class="d-flex justify-content-center align-items-center  text-sm-center text-md-center text-lg-center">
    <form method="post" >
    <div class="login-header">
    <h2 class="text-white">Inicia Tu Registro</h2>
    </div>
    <div class="input-box">
        <input type="tex" class="input-field" name="id_usuario" placeholder="Numero identificacion" autocomplete="off" required></input>
    </div>
    <div class="input-box">
        <input type="tex" class="input-field" name="Nombre" placeholder="Nombre" autocomplete="off" required></input>
    </div>
    <div class="input-box">
        <input type="tex" class="input-field" name="Apellido" placeholder="Apellido" autocomplete="off" required></input>
    </div>
    <div class="input-box">
        <input type="tex" class="input-field" name="Direccion" placeholder="Direccion" autocomplete="off" required></input>
    </div>
    <div class="input-box">
        <input type="tel" class="input-field" name="Contacto" placeholder="Contacto" autocomplete="off" required></input>
    </div>
    <div class="input-box">
        <input type="email" class="input-field" name="Email" placeholder="Email" autocomplete="off" required></input>
    </div>
    <div class="input-box">
        <input type="password" class="input-field" name="Contrasena" placeholder="Contraseña" autocomplete="off" required></input>
    </div>
    <div class="input-box">
        <input type = "hidden" class="input-field" name="ID_Rol" placeholder="Rol" value = 2></input>
    </div>
    </div>
    <p></p>
    <p></p>

    <input class="btn" type="submit" name="registrar" value="REGISTRAR">
    </form>
</body>
</html>