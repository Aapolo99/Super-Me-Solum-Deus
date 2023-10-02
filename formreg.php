<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resgistrar</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
    <script src="https://kit.fontawesome.com/862c9abe55.js" crossorigin="anonymous"></script>

</head>
<body class="bg-dark d-flex justify-content-center align-items-center vh-100 text-sm-center text-md-center text-lg-center">
    <form method="post" >
        
    <h2>Inicia tu registro</h2>
    <p></p>
    <p></p>
    <p></p>


    <div class="input-wrapper">
        <input type="tex" name="id_usuario" placeholder="Numero identificacion"></input>
    </div>
    <div class="input-wrapper">
        <input type="tex" name="Nombre" placeholder="Nombre"></input>
    </div>
    <div class="input-wrapper">
        <input type="tex" name="Apellido" placeholder="Apellido"></input>
    </div>
    <div class="input-wrapper">
        <input type="tex" name="Direccion" placeholder="Direccion"></input>
    </div>
    <div class="input-wrapper">
        <input type="tel" name="Contacto" placeholder="Contacto"></input>
    </div>
    <div class="input-wrapper">
        <input type="email" name="Email" placeholder="Email"></input>
    </div>
    <div class="input-wrapper">
        <input type="password" name="Contrasena" placeholder="Contraseña"></input>
    </div>
    <p></p>
    <p></p>

    <input CLASS="btn" type="submit" name="registrar" value="REGISTRAR">
    </form>

    <?php
        include("registrar.php");
    ?>

</body>
</html>