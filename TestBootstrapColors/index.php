<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Juan Pardo">
    <meta name="description" content="Descripción breve del sitio">
    <meta property="og:title" content="Título de la página">
    <meta property="og:description" content="Descripción breve de la página">

    <title>Title</title>

    <!-- Enlace para cargar JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Enlace para cargar Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Enlaces para cargar Bootstrap -->

    <link rel="stylesheet" href="assets/scss/main.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!--    Enlaces de GoogleFonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600&family=Radley&display=swap"
          rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-lg  bg-theme-violeta">
    <div class="container-fluid">
        <a class="navbar-brand text-theme-gris" href="#">Navbar</a>
        <button class="navbar-toggler d-flex d-lg-none collapsed flex-column justify-content-around" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon top-bar"></span>
            <span class="toggler-icon mid-bar1"></span>
            <span class="toggler-icon mid-bar2"></span>
            <span class="toggler-icon mid-bar3"></span>
            <span class="toggler-icon bot-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-theme-gris" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-theme-gris" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-theme-gris" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-theme-gris" href="#">Action</a></li>
                        <li><a class="dropdown-item text-theme-gris" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-theme-gris" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled text-theme-gris" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="text-light">Test Bootstrap Colors</h1>
        </div>
    </div>

    <div class="container mt-5">
        <button type="button" class="btn btn-theme-magenta rounded-0">Theme-Magenta</button>
        <button type="button" class="btn btn-theme-violeta rounded-0">Theme-Violeta</button>
        <button type="button" class="btn btn-theme-azul rounded-0">Theme-Azul</button>
        <button type="button" class="btn btn-theme-lila rounded-0">Theme-Lila</button>
        <button type="button" class="btn btn-theme-gris rounded-0">Theme-Gris</button>

    </div>

    <div class="row">
        <div class="col-4">
            <div class="box mt-5">
                <p class="m-3 text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at autem
                    beatae commodi
                    doloribus harum in labore libero nihil nisi perspiciatis porro praesentium provident, quia
                    reprehenderit temporibus ullam voluptas voluptates.</p>
            </div>
        </div>
        <div class="col-4">
            <div class="tarjeta mt-5">
                <div class="imgBx">
                    <img class="" src="assets/img/mouse1%20copia.png" alt="Mouse Razer">
                </div>
                <div class="cardData">
                    <p class="descripcion m-0">Mouse Gamer</p>
                    <p class="price m-0">$9.999</p>
                    <button type="button" class="btn btn-theme-magenta rounded-0 comprar text-light">Comprar</button>
                </div>
            </div>
        </div>
        <div class="col-4">
            <form action="" class="formulario">
                <h2 class="text-light mb-5">Registrarse</h2>
                <div class="inputBx">
                    <input type="text" required name="usuario">
                    <label for="usuario">Usuario</label>
                </div>
                <div class="inputBx">
                    <input type="text" required name="email">
                    <label for="email">E-Mail</label>
                </div>
                <div class="inputBx">
                    <input type="text" required name="password">
                    <label for="password">Contraseña</label>
                </div>
                <div class="inputBx">
                    <input type="text" required name="password2">
                    <label for="password2">Repetir Contraseña</label>
                </div>
                <div class="inputBx">
                    <input type="submit" value="Registrarse">
                </div>
                <p>Ya tenés cuenta? Accedé <a href="#">acá</a>
                </p>

            </form>
        </div>
    </div>

    <div class="container-fluid bg-light mt-5">
        <div class="row p-5 align-items-center">
            <div class="col-lg-6">
                <div class="image-container d-flex flex-column align-items-center py-5 mx-3 rounded-1">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-8 col-lg-12">
                            <img src="assets/img/191800-1200-auto.png" alt="Monitor" class="img-fluid">
                            <div class="shadow-img"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="row justify-content-center">
                    <div class="col-11 col-lg-9">
                        <h2 class="text-theme-azul product-title text-start my-5">Monitor SAMSUNG SMGM24</h2>
                        <p class="description text-start">
                            El Nuevo Monitor Gamer Samsung SMGM24 de 24" cuenta con una resolución Full HD de 1920 x
                            1080 y una tasa de refresco de 144Hz, que te permitirá disfrutar de una experiencia de juego
                            fluida y sin interrupciones.
                        </p>
                        <div class="btn btn-theme-magenta rounded-0 text-light mt-2">Ver Producto</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-5 align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="image-container d-flex flex-column align-items-center py-5 mx-3 rounded-1">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-8 col-lg-12">
                            <img src="assets/img/mouse1.png" alt="Mouse" class="img-fluid">
                            <div class="shadow-img"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-center order-md-1">
                <div class="row justify-content-center">
                    <div class="col-10 col-lg-8">
                        <h2 class="text-theme-azul product-title text-start my-3">Mouse Razer GM2200X</h2>
                        <p class="description text-start">
                            El Mouse Razer GM2200X cuenta con un sensor óptico de 6400 DPI, 6 botones
                            programables y un
                            diseño ergonómico que se adapta a la forma de tu mano. Además, cuenta con
                            iluminación RGB
                            Chroma que podrás personalizar a tu gusto.
                        </p>
                        <div class="btn btn-theme-magenta rounded-0 text-light mt-2">Ver Producto</div>

                    </div>

                </div>


            </div>
        </div>

    </div>
    <div class="container bg-light mt-5">
    </div>


    <!-- Scripts para cargar Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
            crossorigin="anonymous"></script>
</body>
</html>
