            <!-- /* 

----------------------------------------------------------------------------------------------------------------------------------------------------------------
                                  Header  &  Nav
---------------------------------------------------------------------------------------------------------------------------------------------------------------- */ -->




<?php

  $titulo = 'Productos |';
  include 'templates/header.php';
  include 'templates/nav.php';
  include 'include/funciones.php';

?>












        <!-- /* 

----------------------------------------------------------------------------------------------------------------------------------------------------------------
                                  Hero
---------------------------------------------------------------------------------------------------------------------------------------------------------------- */ -->











<div class="container">

  <div class="row no-gutters">

    <div class="col-12 hero">
      <img src="img/productos.jpg" alt="nosotros" class="img-fluid">
      <h2 class="text-uppercase d-none d-md-block py-3 px-5">Productos</h2>
    </div>

  </div>

</div>




<div class="container">

  <div class="row">

    <main class="col-lg-12 contenido-principal">
      <h2 class="d-block d-md-none text-uppercase text-center">Productos</h2>









      
        <!-- /* 

----------------------------------------------------------------------------------------------------------------------------------------------------------------
                                  Productos
---------------------------------------------------------------------------------------------------------------------------------------------------------------- */ -->












      <div class="row my-4">
        
          <div class="card-columns productos">

            <?php

              $productos = obtenerPro(8);
              while($producto = $productos->fetch_assoc()) {

            ?>
          
          <div class="card">
            <a href="producto.php?id=<?php echo $producto['id']; ?>">
              <img src="img/<?php echo $producto['imagen_mini']; ?>" alt="Producto 1" class="img-fluid card-img-top">
              <div class="card-body">
                <h3 class="card-tittle text-uppercase text-center"><?php echo $producto['nombre']; ?></h3>
                <p class="card-text uppercase"><?php echo $producto['descripcion_corta']; ?></p>
                <p class="precio lead text-center mb-0">$ <?php echo $producto['precio']; ?></p>
              </div>
            </a>
          </div>

          <?php } ?>

      </div>

    </main>

  </div>

  </div>

</div>












            <!-- /* 

----------------------------------------------------------------------------------------------------------------------------------------------------------------
                                  Footer
---------------------------------------------------------------------------------------------------------------------------------------------------------------- */ -->




<?php

  include 'templates/footer.php'

?>