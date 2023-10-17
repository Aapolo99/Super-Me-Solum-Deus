<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/x-icon" href="/assets/logo-vt.svg" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/login2.css">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 text-sm-center text-md-center text-lg-center">
  <form action="" method="POST">
  <div class=" p-5 rounded-5 text-secondary shadow" >
    <div class="login-header">
    <header><strong class="fw-bold text-white bg-dark">Bienvenido</strong></header>
            <p class="text-white">¡Estamos Felices De Tenerte De Vuelta!</p>
            <?php
            if(isset($errorLogin)){
              echo $errorLogin;
              }

?>
    </div>
    <div class="text-center fs-1 fw-bold text-white-50 bg-dark">Login</div>
    <div class="input-group mt-4">
      <div class="input-group-text bg-info">
        <img src="./img/username-icon.svg" alt="username-icon" style="height: 1rem" />
      </div>
      <input class="form-control bg-light" type="text" placeholder="Email" name="usuario" autocomplete="off" required/>
    </div>
    <div class="input-group mt-1">
      <div class="input-group-text bg-info">
        <img src="./img/password-icon.svg" alt="password-icon" style="height: 1rem" />
      </div>
      <input class="form-control bg-light" type="password" placeholder="Contraseña" name="contrasena" autocomplete="off" required/>
    </div>
    <div class="d-flex justify-content-around mt-1">
      <div class="d-flex align-items-center gap-1">
        <input class="form-check-input" type="checkbox" />
        <div class="pt-1 text-dark" style="font-size: 0.9rem">Recuerda Me </div>
      </div>
      <div class="pt-1">
        <a href="#" class="text-decoration-none text-info fw-semibold fst-italic" style="font-size: 0.9rem"> ¿Has Olvidado Tu Contraseña?</a>
      </div>
    </div>
    <div>
      <input type="submit" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm" value = "Iniciar Sesión">
    </form>
    </div>
    <div class="d-flex gap-1 justify-content-center mt-1 text-white">
      <div>No Tengo Cuenta</div>
      <a href="formreg.php"text-decoration-none text-info fw-semibold>Registrate</a>
    </div>
    <div class="p-3">
      <div class="border-bottom text-center" style="height: 0.9rem">
        <span class="bg-white px-3">or</span>
      </div>
    </div>
    
    <div class="btn d-flex gap-2 justify-content-center border mt-3 shadow-sm">
      <img src="./img/google-icon.svg" alt="google-icon" style="height: 1.6rem" />
      <div ><a href="./paginaPrincipal.html" class="fw-semibold text-secondary text-white">Inicia Sesión Con Google</a></div>
    </div>
    

    <div class="btn d-flex gap-2 justify-content-center border mt-3 shadow-sm">
      <div ><a href="./paginaPrincipal.html" class="fw-semibold text-secondary text-white">Inicio</a></div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>