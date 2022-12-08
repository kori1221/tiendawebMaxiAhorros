<?php

require 'config/config.php' ; 
require 'config/database.php' ; 
$db = new Database();
$con = $db->conectar();

$id= isset($_GET['id']) ? $_GET['id'] : '';
$token = isset($_GET['token']) ? $_GET['token'] : '';

if($id == '' || $token == ''){
    echo 'Error al procesar la petición';
    exit;
}else{
    $token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);

    if ($token == $token_tmp){ 
        $sql = $con->prepare("SELECT count(id) FROM productost WHERE id=? ");
        $sql->execute([$id]);
        if($sql->fetchColumn() > 0){
            $sql = $con->prepare("SELECT nombre, descripcion, precio FROM productost WHERE id=? 
            LIMIT 1");
            $sql->execute([$id]);
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            $nombre = $row['nombre'];
            $descripcion = $row['descripcion'];
            $precio = $row['precio'];
 
        
            $dir_images = 'imagenes/' . $id . '/';
            $rutaImg = $dir_images . 'principal.jpg';

            if (!file_exists($rutaImg)){
              $rutaImg = 'imagenes/no-photo.jpg;}';
            }
            $imagenes = array();
            if(file_exists($dir_images))
            {
            $dir = dir($dir_images);

            while (($archivo = $dir->read()) != false){
              if ($archivo != 'principal.jpg' && (strpos($archivo, 'jpg') || strpos($archivo, 'jpeg'))){
                $imagenes[] = $dir_images . $archivo;
              }
            }
            $dir->close();
            }}
    } else{
        echo 'Error al procesar la petición';
        exit;
    }
}

$sql = $con->prepare("SELECT id, nombre, precio FROM productost WHERE tipo=1");
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
            <a class="navbar-brand text-secondary" href="http://localhost/Proyecto%20MaxiAhorros%20K/index.html" id="Inicio">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              Inicio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active text-secondary" aria-current="page" href="http://localhost/Proyecto%20MaxiAhorros%20K/productos.php"
                    id="Productos">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Productos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-secondary" href="http://localhost/Proyecto%20MaxiAhorros%20K/sucursales.html"
                    id="Sucursales">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sucursales&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-secondary" href="http://localhost/Proyecto%20MaxiAhorros%20K/ofertas.php"
                    id="Ofertas">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ofertas
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link  text-secondary" href="http://localhost/Proyecto%20MaxiAhorros%20K/carrito.html"
                    id="Carrito">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Carrito<span id="num_cart" class="badge bg-secondary"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
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
  <br>
  <main>
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-1">
                <img src="<?php echo $rutaImg; ?>" width="450px" height="400px">

            </div>
            <div class="col-md-6 order-md-2">
              <h2><?php echo $nombre; ?></h2>

           


                <h2><?php echo MONEDA . number_format($precio, 2, '.', ','); ?></h2>


              <p class=lead>
                <?php echo $descripcion; ?>
              </p>

        
        </div>

      
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  <script>
    function addProducto(id, token) {
      let url = 'clases/carrito.php'
      let formData = new FormData()
      formData.append('id', id)
      formData.append('token', token)

      fetch(url, {
        method: 'POST',
        body: formData,
        mode: 'cors'
      }).then(response => response.json())
      .then(data =>{
        if(data.ok){
          let elemento = document.getElementById("num_cart")
          elemento.innerHTML = data.numero
        }
      })
    }
  </script>
</body>
<br><br><br><br>
<footer>
  <table>
    <tr>
      <td>&nbsp;Alajuela +506 6089 7546 &nbsp;</td>
      <td>Cartago +506 2438 9064 &nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;San Jose +506 8567 8456</td>
      <td>&nbsp;Heredia +506 6547 8647</td>
      <td>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </td>
      <td>MaxiAhorros 2022.</td>
      <td>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </td>
      <td>Todos los derechos reservados</td>
  </table>

</footer>

</html>