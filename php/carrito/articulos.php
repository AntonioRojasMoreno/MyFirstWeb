<?php
session_start();
if (!isset($_SESSION['Nombre_Usuario'])) {
    echo '
        <script>
            alert("Por favor, debes iniciar sesión");
            window.location= "../../logging.php";
        </script>
    
    ';

    session_destroy();
    die();
}

?>

<?php
if (isset($_SESSION['carrito'])) {
    $carrito_mio = $_SESSION['carrito'];
}
if (isset($_SESSION['carrito'])) {
    for ($i = 0; $i <= count($carrito_mio) - 1; $i++) {
        if (isset($carrito_mio[$i])) {
            if ($carrito_mio[$i] != NULL) {
                if (!isset($carrito_mio['cantidad'])) {
                    $carrito_mio['cantidad'] = '0';
                } else {
                    $carrito_mio['cantidad'] = $carrito_mio['cantidad'];
                }
                $total_cantidad = $carrito_mio['cantidad'];
                $total_cantidad++;
                if (!isset($totalcantidad)) {
                    $totalcantidad = '0';
                } else {
                    $totalcantidad = $totalcantidad;
                }
                $totalcantidad += $total_cantidad;
            }
        }
    }
}
if (!isset($totalcantidad)) {
    $totalcantidad = '';
} else {
    $totalcantidad = $totalcantidad;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js"></script>

</head>

<body>
    <!-- Sección nav -->
    <nav class="navbar navbar-expand-md navbar-dark fixex-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mi Tienda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>

            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../../index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Página</a>
                    </li>
                    <li class="nav-item">

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cart" style="cursor:pointer;"> <i class="fas fa-shopping-cart"></i> <?php echo $totalcantidad; ?> Mi carrito</a>

                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="¿?" aria-label="Search">
                    <button class="btn btn-btn-outline-success" type="submit">Buscar</button>
                </form>
                <li class="nav-item">
                <a href="../cerrar_sesion.php">Cerrar sesión</a>
                    </li>
                
            </div>
        </div>

    </nav>
    <!-- Sección de los productos a comprar -->
    <section class="container">
        <h2 class="text-center mb-4">Productos Destacados</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="../../img/articulos/01.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Procesador Intel Core i9</h5>
                        <p class="card-text">580€</p>
                        <form id="formulario" name="formulario" method="post" action="cart.php">

                            <button type="button" class="btn btn-primary">Detalles</button>
                            <button type="submit" class="btn btn-primary">Añadir al carrito</button>
                            <input name="ref" type="hidden" id="ref" value="ma001" />
                            <input name="precio" type="hidden" id="precio" value="580" />
                            <input name="titulo" type="hidden" id="titulo" value="Procesador Intel Core i9" />
                            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="../../img/articulos/02.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">ASUS TUF Gaming F17 FX706HM-HX059</h5>
                        <p class="card-text">1199€</p>
                        <form id="formulario" name="formulario" method="post" action="cart.php">

                            <button type="button" class="btn btn-primary">Detalles</button>
                            <button type="submit" class="btn btn-primary">Añadir al carrito</button>
                            <input name="ref" type="hidden" id="ref" value="ma002" />
                            <input name="precio" type="hidden" id="precio" value="1199" />
                            <input name="titulo" type="hidden" id="titulo" value="ASUS TUF Gaming F17 FX706HM-HX059" />
                            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="../../img/articulos/03.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Monitor: Asus TUF Gaming VG249Q</h5>
                        <p class="card-text">160€</p>
                        <form id="formulario" name="formulario" method="post" action="cart.php">

                            <button type="button" class="btn btn-primary">Detalles</button>
                            <button type="submit" class="btn btn-primary">Añadir al carrito</button>
                            <input name="ref" type="hidden" id="ref" value="ma003" />
                            <input name="precio" type="hidden" id="precio" value="160" />
                            <input name="titulo" type="hidden" id="titulo" value="Monitor: Asus TUF Gaming VG249Q" />
                            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="../../img/articulos/04.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Gigabyte GeForce RTX 4090</h5>
                        <p class="card-text">1560€</p>
                        <form id="formulario" name="formulario" method="post" action="cart.php">

                            <button type="button" class="btn btn-primary">Detalles</button>
                            <button type="submit" class="btn btn-primary">Añadir al carrito</button>
                            <input name="ref" type="hidden" id="ref" value="ma004" />
                            <input name="precio" type="hidden" id="precio" value="1560" />
                            <input name="titulo" type="hidden" id="titulo" value="Gigabyte GeForce RTX 4090" />
                            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="../../img/articulos/05.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Samsung QE55Q80B 55" QLED UltraHD 4K HDR10+</h5>
                        <p class="card-text">630€</p>
                        <form id="formulario" name="formulario" method="post" action="cart.php">

                            <button type="button" class="btn btn-primary">Detalles</button>
                            <button type="submit" class="btn btn-primary">Añadir al carrito</button>
                            <input name="ref" type="hidden" id="ref" value="ma005" />
                            <input name="precio" type="hidden" id="precio" value="630" />
                            <input name="titulo" type="hidden" id="titulo" value="Samsung QE55Q80B" />
                            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="../../img/articulos/06.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Memoria Ram 32 GB: Kingston FURY Beast DDR4 (2x16GB)</h5>
                        <p class="card-text">60€</p>
                        <form id="formulario" name="formulario" method="post" action="cart.php">

                            <button type="button" class="btn btn-primary">Detalles</button>
                            <button type="submit" class="btn btn-primary">Añadir al carrito</button>
                            <input name="ref" type="hidden" id="ref" value="ma006" />
                            <input name="precio" type="hidden" id="precio" value="60" />
                            <input name="titulo" type="hidden" id="titulo" value="Memoria Ram 32 GB" />
                            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MODAL CARRITO -->
<div class="modal fade" id="modal_cart" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Mi carrito</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div>
					<div class="p-2">
						<ul class="list-group mb-3">
							<?php
							if (isset($_SESSION['carrito'])) {
								$total = 0;
								for ($i = 0; $i <= count($carrito_mio) - 1; $i++) {
									if (isset($carrito_mio[$i])) {
										if ($carrito_mio[$i] != NULL) {
							?>

											<li class="list-group-item justify-content-between px-4">
												<div class="row">
													<div class="col-10 p-0" style="text-align: left; color: #000000;">
														<h6 class="my-0">Cantidad: <?php echo $carrito_mio[$i]['cantidad'] ?> : <?php echo $carrito_mio[$i]['titulo']; ?></h6>
													</div>
													<div class="col-2 p-0" style="text-align: right; color: #000000;">
														<span class="text-muted" style="text-align: right; color: #000000;"><?php echo $carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad'];    ?> €</span>
													</div>
												</div>
											</li>
							<?php
											$total = $total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
										}
									}
								}
							}
							?>
							<li class="list-group-item d-flex justify-content-between">
								<span style="text-align: left; color: #000000;">Total (EUR)</span>
								<strong style="text-align: left; color: #000000;"><?php
																					if (isset($_SESSION['carrito'])) {
																						$total = 0;
																						for ($i = 0; $i <= count($carrito_mio) - 1; $i++) {
																							if (isset($carrito_mio[$i])) {
																								if ($carrito_mio[$i] != NULL) {
																									$total = $total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
																								}
																							}
																						}
																					}
																					if (!isset($total)) {
																						$total = '0';
																					} else {
																						$total = $total;
																					}
																					echo $total; ?> €</strong>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
				<a type="button" class="btn btn-primary" href="borrarcarro.php">Vaciar carrito</a>
				<a type="button" class="btn btn-primary" href="pagar.php">Pagar</a>
			</div>
		</div>
	</div>
</div>

<!-- END MODAL CARRITO -->

<!-- Footer-->
<footer class="bg-light">
    <div class="container text-center py-3">
      <p>Tienda de Componentes Informáticos PcDetails &copy; 2023</p>
    </div>
  </footer>
</body>

</html>