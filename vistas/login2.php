<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="/assets/logo-vt.svg" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login2.css">
</head>
<body>
<form action="" method="POST">
    <div class="login-box">
        <div class="login-header">
            <header>Bienvenido</header>
            <p>¡Estamos Felices De Tenerte De Vuelta!</p>
        </div>
        <div class="input-box">
            <input type="text" class="input-field" id="email" name="usuario" autocomplete="off" required>
            <label for="email">Email</label>
        </div>
        <div class="input-box">
            <input type="password" class="input-field" id="password" name="usuario" autocomplete="off" required>
            <label for="password" name="contrasena">Contraseña</label>
            <?php

if(isset($errorLogin)){
    echo $errorLogin;
}

?>
        </div>
        <div class="forgot">
            <section>
                <input type="checkbox" id="check">
                <label for="check">Recuerda Me</label>
            </section>
            <section>
                <a href="#" class="forgot-link">¿Has Olvidado Tu Contraseña?</a>
            </section>
        </div>
        <div class="input-box">
            <input type="submit" class="input-submit" value="Iniciar Sesión">
        </div>
        <div class="middle-text">
            <hr>
            <p class="or-text">O</p>
        </div>
        <div class="social-sign-in">
            <button class="input-google">
                 <img src="../img/google-icon.svg" alt="">
                 <p>Inicia Sesión Con Google</p>
            </button>
            <button class="input-twitter">
                <img src="../img/logo_tw.png" alt="">
            </button>
        </div>
        <div class="sign-up">
            <p><strong>No Tengo Cuenta </strong><a href="../formreg.php"text-decoration-none text-info fw-semibold> Registrate</a></p>
        </div>
    </div>
</form>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>