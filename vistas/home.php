<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/paginaPrincipal.css">
    <title>Super Me Solum Deus</title>
</head>
<body>
    <header class="header" id="inicio">
        <nav class="navbar navbar-expand-lg bg-body-tertiary barraNav">
            <div class="container-fluid">
              <a class="navbar-brand" href="./index.html">Login</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./paginaPrincipal.html">Inicio</a>
                      </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./listaDePrecios.html">Lista De Precios</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="includes/logout.php">Cerrar Sesion</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        <div class="contenedor head">
            <h1 class="titulo"><?php echo $user->getNombre(); ?> Bienvenido A El Restaurant Donde La Comida Es De Ensueño</h1>
        </div>
    </header>
    <main>
        <section class="service contenedor" id="servicio">
            <h2 class="subtitulo">Que Hacemos</h2>
            <div class="contenedor-servicio">
                <img src="./img/C15.jpg" alt="">
                <div class="checklist-servicio">
                    <div class="servicie">
                        <h3 class="n-servicie"><span class="number">1</span>Alta Cocina</h3>
                        <p>La alta cocina es un estilo de cocina que se caracteriza por un alto refinamiento en sus preparaciones, el uso de productos alimentarios de calidad y la profesionalidad de los cocineros.En resumen, la alta cocina es una forma de arte culinario que se caracteriza por la creación de platos sofisticados y elaborados utilizando técnicas e ingredientes de alta calidad.</p>
                    </div>
                    <div class="servicie">
                        <h3 class="n-servicie"><span class="number">2</span>Sabor Inigualable</h3>
                        <p>Los platos se preparan con elaboraciones complejas y detalladas que dejan a los comensales con la boca abierta.</p>
                    </div>
                    <div class="servicie">
                        <h3 class="n-servicie"><span class="number">3</span>Experiencias Inolvidables</h3>
                        <p>La alta cocina se caracteriza por elaborar platos con las más avanzadas técnicas culinarias, y en la que sobresale la calidad de los ingredientes y los emplatados espectaculares, para así ofrecer experiencias inolvidables.</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="slider">
            <div class="slide-track">
                <div class="slide"><img src="./img/C1.jpg" alt=""></div>
                <div class="slide"><img src="./img/C2.jpg" alt=""></div>
                <div class="slide"><img src="./img/C3.jpg" alt=""></div>
                <div class="slide"><img src="./img/C4.jpg" alt=""></div>
                <div class="slide"><img src="./img/C5.jpg" alt=""></div>
                <div class="slide"><img src="./img/C6.jpg" alt=""></div>
                <div class="slide"><img src="./img/C7.jpg" alt=""></div>
                <div class="slide"><img src="./img/C8.jpg" alt=""></div>
                <div class="slide"><img src="./img/C9.jpg" alt=""></div>
                <div class="slide"><img src="./img/C10.jpg" alt=""></div>
                <div class="slide"><img src="./img/C11.jpg" alt=""></div>
                <div class="slide"><img src="./img/C12.jpg" alt=""></div>
                <div class="slide"><img src="./img/C13.jpg" alt=""></div>
                <div class="slide"><img src="./img/C14.jpg" alt=""></div>
                <div class="slide"><img src="./img/C15.jpg" alt=""></div>
                

                <div class="slide"><img src="./img/C1.jpg" alt=""></div>
                <div class="slide"><img src="./img/C2.jpg" alt=""></div>
                <div class="slide"><img src="./img/C3.jpg" alt=""></div>
                <div class="slide"><img src="./img/C4.jpg" alt=""></div>
                <div class="slide"><img src="./img/C5.jpg" alt=""></div>
                <div class="slide"><img src="./img/C6.jpg" alt=""></div>
                <div class="slide"><img src="./img/C7.jpg" alt=""></div>
                <div class="slide"><img src="./img/C8.jpg" alt=""></div>
                <div class="slide"><img src="./img/C9.jpg" alt=""></div>
                <div class="slide"><img src="./img/C10.jpg" alt=""></div>
                <div class="slide"><img src="./img/C11.jpg" alt=""></div>
                <div class="slide"><img src="./img/C12.jpg" alt=""></div>
                <div class="slide"><img src="./img/C13.jpg" alt=""></div>
                <div class="slide"><img src="./img/C14.jpg" alt=""></div>
                <div class="slide"><img src="./img/C15.jpg" alt=""></div>
            </div>   
        </div>        
    </main>
    <footer id="contacto">
        <div class="contenedor footer-content">
            <div class="contact-us">
                <h2 class="brand">Super Me Solum Deus</h2>
                <p>Somos Expertos En Llevarte A Otro Mundo Con Nuestra Comida</p>
            </div>
            <div class="social-media">
                <a href="./" class="social-media-icon">
                    <i class='bx bxl-facebook-circle'></i>
                </a>
                <a href="./" class="social-media-icon">
                    <i class='bx bxl-instagram-alt'></i>
                </a>
            </div>
        </div>
        <div class="line"></div>
    </footer>
</body>
</html>