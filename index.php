<?php
  session_start();
  if(isset($_SESSION['Nombre_Usuario'])){
    header("location: php/carrito/articulos.php");

  }
?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tienda de PCDetails</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js'></script>
  
</head>

<body>


  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Tienda de Componentes Informáticos PcDetails</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="php/carrito/articulos.php">Laptops</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="php/carrito/articulos.php">Desktops</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="php/carrito/articulos.php">Accesorios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="php/carrito/articulos.php">Software</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="php/carrito/articulos.php">Todos los productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="faq.html">FAQ(Preguntas mas frecuentes)</a>
          </li>
        </ul>
        <form class="d-flex ms-auto">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
          <button class="btn btn-outline-primary" type="submit" id="buscar">Buscar</button>
        </form>
        <ul class="navbar-nav ms-3">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Mi cuenta
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="logging.php">Iniciar sesión</a></li>
              <li><a class="dropdown-item" href="registro.php">Registrar usuario</a></li>
              

            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="php/carrito/articulos.php">Carrito</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 
  <!-- Header -->
  <header class="jumbotron jumbotron-fluid bg-light">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h1>Componentes informáticos de alta calidad</h1>
          <p>Encuentra lo que necesitas para armar tu computadora de ensueño</p>
          <a href="#" class="btn btn-primary btn-lg">Explorar</a>
        </div>
        <div class="col-md-6">
          <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid" alt="Imagen de componentes informáticos">
        </div>
      </div>
    </div>
  </header>

  <!-- Products Section -->
  <section class="container">
    <h2 class="text-center mb-4">Productos Destacados</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <img src="img/articulos/01.jpg"
            class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Procesador Intel Core i9</h5>
            <p class="card-text">580€</p>
            <a href="php/carrito/articulos.php" class="btn btn-primary">Comprar</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img
            src="img/articulos/02.jpg"
            class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">ASUS TUF Gaming F17 FX706HM-HX059</h5>
            <p class="card-text">1199€</p>
            <a href="php/carrito/articulos.php" class="btn btn-primary">Comprar</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img
            src="img/articulos/03.jpg"
            class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Monitor: Asus TUF Gaming VG249Q</h5>
            <p class="card-text">160€</p>
            <a href="php/carrito/articulos.php" class="btn btn-primary">Comprar</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img
            src="img/articulos/04.jpg"
            class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Gigabyte GeForce RTX 4090</h5>
            <p class="card-text">1560€</p>
            <a href="php/carrito/articulos.php" class="btn btn-primary">Comprar</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img
            src="img/articulos/05.jpg"
            class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Samsung QE55Q80B 55" QLED UltraHD 4K HDR10+</h5>
            <p class="card-text">630€</p>
            <a href="php/carrito/articulos.php" class="btn btn-primary">Comprar</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img
            src="img/articulos/06.jpg"
            class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Memoria Ram 32 GB: Kingston FURY Beast DDR4 (2x16GB)</h5>
            <p class="card-text">60€</p>
            <a href="php/carrito/articulos.php" class="btn btn-primary">Comprar</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <footer class="bg-light">
    <div class="container text-center py-3">
      <p>Tienda de Componentes Informáticos PcDetails &copy; 2023</p>
    </div>
  </footer>
  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js"></script>
</body>

</html>