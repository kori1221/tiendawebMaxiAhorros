<?php
require 'config/config.php' ; 
require 'config/database.php' ; 
$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT id, nombre, precio FROM productost WHERE categoriaP=3");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="http://localhost/Proyecto%20MaxiAhorros%20K/estilos.css">
    <link rel="stylesheet" href="http://localhost/Proyecto%20MaxiAhorros%20K/sass/custom.css">
    <link rel="stylesheet" href="http://localhost/Proyecto%20MaxiAhorros%20K/carrito.css">
</head>
<header>
    <table>
        <tr>
            <td class="logoHeader">
                <img src="http://localhost/Proyecto%20MaxiAhorros%20K/imagenes/logoRedondo.png" alt="logo1" class="logo1">
            </td>
            <td class="barraNav">
                <nav class="navbar navbar-expand-lg bg-primary">
                    <div class="container-fluid">
                      <a class="navbar-brand text-secondary" href="http://localhost/Proyecto%20MaxiAhorros%20K/index.php" id="Inicio">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Inicio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a> 
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                          <li class="nav-item">
                            <a class="nav-link active text-success" aria-current="page" href="http://localhost/Proyecto%20MaxiAhorros%20K/productos.php" id="Productos"><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Productos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> </a> 
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-secondary" href="http://localhost/Proyecto%20MaxiAhorros%20K/sucursales.php" id="Sucursales">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sucursales&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-secondary" href="http://localhost/Proyecto%20MaxiAhorros%20K/ofertas.php" id="Ofertas">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ofertas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link  text-secondary" href="http://localhost/Proyecto%20MaxiAhorros%20K/carrito.html" id="Carrito">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Carrito&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
            </td>
        </tr>
    </table>
</header>
<body>
    <div class="text-success text-center">
        <h1><b>Limpieza</b></h1>
    </div>
<aside>
  <!-- menu y btn de carrito -->
<table>
  <tr>
    <td class="bg-primary justify-content-center" id="navbarVertical">
      <!-- Menu vertical -->
      <div class="container bg-primary" >
        <ul class="nav flex-column">
          <li class="nav-item">
            <!-- Boton hogar -->
            <div class="dropdown">
              <button class="bg-primary fs-3 text-success dropdown-toggle" id="btnDropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Hogar
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="http://localhost/Proyecto%20MaxiAhorros%20K/electrodomesticos.php">Electrodomesticos</a></li>
                <li><a class="dropdown-item" href="http://localhost/Proyecto%20MaxiAhorros%20K/ropa.php">Ropa</a></li>
                <li><a class="dropdown-item" href="http://localhost/Proyecto%20MaxiAhorros%20K/limpieza.php">Limpieza</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <button class="bg-primary fs-3 text-success dropdown-toggle" id="btnDropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Jardin
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="http://localhost/Proyecto%20MaxiAhorros%20K/herramientas.php">Herramientas</a></li>
                <li><a class="dropdown-item" href="http://localhost/Proyecto%20MaxiAhorros%20K/plantas.php">Plantas/semillas</a></li>
                <li><a class="dropdown-item" href="http://localhost/Proyecto%20MaxiAhorros%20K/decoraciones.php">Decoracion</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <button class="bg-primary fs-3 text-success dropdown-toggle" id="btnDropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Deportes
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="http://localhost/Proyecto%20MaxiAhorros%20K/accesorios.php">Accesorios</a></li>
                <li><a class="dropdown-item" href="http://localhost/Proyecto%20MaxiAhorros%20K/bicicletas.php">Bicicletas</a></li>
                <li><a class="dropdown-item" href="http://localhost/Proyecto%20MaxiAhorros%20K/balones.php">Balones</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <button class="bg-primary fs-3 text-success dropdown-toggle" id="btnDropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Alimentos
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="http://localhost/Proyecto%20MaxiAhorros%20K/canastaBasica.php">Canasta basica</a></li>
                <li><a class="dropdown-item" href="http://localhost/Proyecto%20MaxiAhorros%20K/bebidas.php">Bebidas</a></li>
                <li><a class="dropdown-item" href="http://localhost/Proyecto%20MaxiAhorros%20K/carnes.php">Carnes</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <button class="bg-primary fs-3 text-success" id="btnDropdown" type="button">
                <a href="/http://localhost/Proyecto%20MaxiAhorros%20K/ofertas.php" class="bg-primary fs-3 text-success" id="ofertasA">Ofertas</a>
              </button>
            </div>
          </li>
        </ul>
      </div>
    </td>
  </tr>

  <tr>
    <td>
      <div class="btn-group" id="btnCarritoProductos">
      <button type="button" class="btn btn-primary text-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </svg>  
        Ir al carrito
        </button>
      </div>
    </td>
  </tr>
</table>

</aside>
<section class="store">
        <div class="container">
            <div class="row row-cols-md-3 g-3">
            <?php foreach($resultado as $row ){?>
                <div class="col">
                        <div class="item shadow mb-4">
                            <h3 class="item-title"><?php echo $row['nombre']?> </h3>
                            <?php
                            $id = $row['id'];
                            $imagen = "http://localhost/Proyecto%20MaxiAhorros%20K/imagenes/no-photo.jpg";
                            if(!file_exists($imagen)){
                            $imagen = "http://localhost/Proyecto%20MaxiAhorros%20K/imagenes/".$id."/principal.jpg";
                            }
                            ?>
                            <img class="item-image" src="<?php echo $imagen;?>" alt="img">

                            <div class="item-details">

                                <h4 class="item-price"> ₡<?php echo $row['precio']?> </h4>
                               
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="detalles_productos.php?id=<?php echo $row['id']; ?>&token=<?php echo
                                    hash_hmac('sha1', $row['id'], KEY_TOKEN); ?>" class="btn btn-primary text-success btn-lg">Detalles</a>                   
                                </div>
                                
                            </div>
                           

                        </div>
                </div>
            <?php }?>
            </div>
        </div>
    </section>
    <!-- END SECTION STORE -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Productos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <!-- START SECTION SHOPPING CART -->
    <section class="shopping-cart">
        <div class="container">
            <h1 class="text-center">Carrito de Compras</h1>
            <hr>
            <div class="row">
                <div class="col-6">
                    <div class="shopping-cart-header">
                        <h6>Producto</h6>
                    </div>
                </div>
                <div class="col-2">
                    <div class="shopping-cart-header">
                        <h6 class="text-truncate">Precio</h6>
                    </div>
                </div>
                <div class="col-4">
                    <div class="shopping-cart-header">
                        <h6>Cantidad</h6>
                    </div>
                </div>
            </div>
            <!-- ? START SHOPPING CART ITEMS -->
            <div class="shopping-cart-items shoppingCartItemsContainer">
            </div>
            <!-- ? END SHOPPING CART ITEMS -->

            <!-- START TOTAL -->
            <div class="row">
                <div class="col-12">
                    <div class="shopping-cart-total d-flex align-items-center">
                        <p class="mb-0">Total</p>&nbsp;&nbsp;&nbsp;&nbsp;
                        <p class="ml-4 mb-0 shoppingCartTotal">0₡</p>
                        <!--<div class="toast ml-auto bg-info" role="alert" aria-live="assertive" aria-atomic="true"
                            data-delay="2000">
                            <div class="toast-header">
                                <span>✅</span>
                                <strong class="mr-auto ml-1 text-secondary">Elemento en el carrito</strong>
                                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="toast-body text-white">
                                Se aumentó correctamente la cantidad
                            </div>-->
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button class="btn btn-primary ml-auto comprarButton text-success" type="button" data-toggle="modal"
                            data-target="#comprarModal">Realizar Compra</button>
                    </div>
                </div>
            </div>
      </div>
      <!-- START MODAL COMPRA -->
      <div class="modal fade" id="comprarModal" tabindex="-1" aria-labelledby="comprarModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="comprarModalLabel">¡Gracias por comprar en Maxiahorro!</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h4>Recibirá su pedido lo más pronto posible.</h4>
                            <br>
                            <div class="carritoofertas">
                            <img class="align-items-center" src="imagenes/logoRedondo.Png" width="250px" height="250px">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MODAL COMPRA -->     
    </div>
  </div>
</div>       
            <!-- SCRIPTS -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
   
<script src="./carrito.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer> 
<table>
  <tr>
    <td>&nbsp;Alajuela +506 6089 7546 &nbsp;</td>
    <td>Cartago +506 2438 9064 &nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;San Jose +506 8567 8456</td>
    <td>&nbsp;Heredia +506 6547 8647</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td>MaxiAhorros 2022.</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td>Todos los derechos reservados</td>
  </table>
  
</footer>
</html>