            <!-- /* 

----------------------------------------------------------------------------------------------------------------------------------------------------------------
                                  Header  &  Nav
---------------------------------------------------------------------------------------------------------------------------------------------------------------- */ -->




<?php

  if(isset($_GET['id'])) {
    if( filter_var($_GET['id'], FILTER_VALIDATE_INT)){
      $producto_id = $_GET['id'];
    }else {
      header('Location: 404.html');
      exit;
    }
  };


  $titulo = 'Producto';
  include 'templates/header.php';
  include 'templates/nav.php';
  include 'include/funciones.php';

  $resultado = obtenerProd( $producto_id);

  if($resultado->num_rows > 0) {

  $resultado = obtenerProd( $producto_id);
  while($producto = $resultado->fetch_assoc()) {

?>












        <!-- /* 

----------------------------------------------------------------------------------------------------------------------------------------------------------------
                                  Hero
---------------------------------------------------------------------------------------------------------------------------------------------------------------- */ -->











<div class="container">

  <div class="row no-gutters">

    <div class="col-12 hero">
      <img src="img/<?php echo $producto['imagen_completa'] ?>" alt="producto 1" class="img-fluid">
      <h2 class="text-uppercase d-none d-md-block py-3 px-5"><?php echo $producto['nombre'] ?></h2>
    </div>

  </div>

</div>







        <!-- /* 

----------------------------------------------------------------------------------------------------------------------------------------------------------------
                                  Producto
---------------------------------------------------------------------------------------------------------------------------------------------------------------- */ -->










<div class="container">

  <div class="row mt-3 no-gutters">

    <main class="col-lg-8 contenido-principal">
      <h2 class="d-block d-md-none text-uppercase text-center"><?php echo $producto['nombre'] ?></h2>

      <p><?php echo $producto['descripcion'] ?></p>
    </main>


    <aside class="col-lg-4 pt-4 pt-lg-0 cupon">

      <div class="siddebar">
        <h2 class="text-center text-uppercase my-3">Descripción corta</h2>
        <p class="text-center px-3"><?php echo $producto['descripcion_corta'] ?></p>
        <h3 class="text-center mt-5">Precio</h3>
        <p class="display-4 text-center">$<?php echo $producto['precio'] ?></p>
      </div>

    </aside>


  </div>

</div>









            <!-- /* 

----------------------------------------------------------------------------------------------------------------------------------------------------------------
                                  Footer
---------------------------------------------------------------------------------------------------------------------------------------------------------------- */ -->




<?php

  } //Fin de while
  }else {
    echo '<h2 class="text-center text-uppercase my-3">Producto no encontrado</h2>';
  }; //Fin del limite de productos
  include 'templates/footer.php'

?>