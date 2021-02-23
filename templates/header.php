<?php
  // //definir un nombre para cachear 
  // $archivo = basename($_SERVER['PHP_SELF']);
  // $pagina = str_replace(".php", "", $archivo);
  // // definir archivo para cachear (pueder .php)
  // if (isset($_GET['id'])) {
  //   $archivoCache = 'cache/'.$pagina."-".$_GET['id'].'.html';
  // } else {
  // $archivoCache = 'cache/'.$pagina.'.html';
  // }
  // //tiempo a estar el almacenamiento
  // $tiempo = 36000;
  // // Ver si el archivo existe
  // if (file_exists($archivoCache) && time() - $tiempo < filemtime($archivoCache)) {
  //   include ($archivoCache);
  //   exit;
  // }
  // // Si no existe el tiempo ya se vencio
  // ob_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Italianno|Lato:400,700,900|Raleway: 400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title><?php echo $titulo?> CarolinaSpa</title>
  </head>
  <body>

        <!-- /* 

----------------------------------------------------------------------------------------------------------------------------------------------------------------
                                  Banner
---------------------------------------------------------------------------------------------------------------------------------------------------------------- */ -->






  
  
    <header class="banner container">
      <div class="row justify-content-md-between align-items-center">
        <div class="col-lg-4">
          <a href="index.php">
            <img src="img/logo.svg" alt="Logo" class="fluid-img mx-auto d-block pt-4 pb-4">
          </a>
        </div>
        <div class="col-lg-4">
            <nav class="sociales text-center text-lg-left">
              <ul>
                <li><a href="http://facebook.com"><span class="sr-only">facebook</span><i class="fab fa-facebook-square"></i></a></li>
                <li><a href="http://twitter.com"><span class="sr-only">Twitter</span><i class="fab fa-twitter-square"></i></a></li>
                <li><a href="http://instagram.com"><span class="sr-only">Instagram</span><i class="fab fa-instagram-square"></i></a></li>
                <li><a href="http://pinterest.com"><span class="sr-only">Pinterest</span><i class="fab fa-pinterest-square"></i></a></li>
                <li><a href="http://youtube.com"><span class="sr-only">Youtube</span><i class="fab fa-youtube-square"></i></a></li>
              </ul>
            </nav>
        </div>
      </div>
    </header>