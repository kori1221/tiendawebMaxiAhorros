<?php
require 'config/config.php' ; 
require 'config/database_ofertas.php' ; 
$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT id, nombre, precio FROM productoso WHERE tipo=1");
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
    <link rel="stylesheet" href="./sass/custom.css">
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
                    <a class="navbar-brand text-secondary" href="http://localhost/Proyecto%20MaxiAhorros%20K/index.html" id="Inicio">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Inicio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a> 
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link active text-secondary" aria-current="page" href="http://localhost/Proyecto%20MaxiAhorros%20K/productos.php" id="Productos">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Productos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a> 
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-success" href="http://localhost/Proyecto%20MaxiAhorros%20K/sucursales.html" id="Sucursales">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <b> Sucursales</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>
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
    <!-- START SECTION STORE -->
    <section class="store">
        <div class="container">
            <div class="items">
            <?php foreach($resultado as $row ){?>
                <div class="row">

                    <div class="col-12 col-md-6">
                        <div class="item shadow s-m">
                        <?php
        $id = $row['id'];
        $imagen = "http://localhost/Proyecto%20MaxiAhorros%20K/imagenes/no-photo.jpg";
        if(!file_exists($imagen)){
          $imagen = "http://localhost/Proyecto%20MaxiAhorros%20K/imagenes_ofertas/".$id."/principal.jpg";
        }
        ?>
                            <img src="<?php echo $imagen;?>" alt="img" class="position-relative item-image" id="ImagenProducto">
                            <h3 class="item-title"><?php echo $row['nombre']?> </h3>

                            <div class="item-details">
                                <p class="item-price">$<?php echo number_format($row ['precio'], 2, '.', ',')?> </p>
                                <button class="item-button btn btn-primary addToCart">AÑADIR AL CARRITO</button>
                            </div>
                        </div>
                    </div>
                </div>

            <?php }?>    
            </div>
        </div>
    </section>
    <!-- END SECTION STORE -->
    <!-- START SECTION SHOPPING CART -->
    <section class="shopping-cart">
        <div class="container">
            <h1 class="text-center">CARRITO</h1>
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
                        <p class="mb-0">Total</p>
                        <p class="ml-4 mb-0 shoppingCartTotal">0€</p>
                        <div class="toast ml-auto bg-info" role="alert" aria-live="assertive" aria-atomic="true"
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
                            </div>
                        </div>
                        <button class="btn btn-success ml-auto comprarButton" type="button" data-toggle="modal"
                            data-target="#comprarModal">Comprar</button>
                    </div>
                </div>
            </div>

            <!-- END TOTAL -->

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
</body>