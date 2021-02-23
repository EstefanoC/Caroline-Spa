        <!-- /* 

----------------------------------------------------------------------------------------------------------------------------------------------------------------
                                  Navegador
---------------------------------------------------------------------------------------------------------------------------------------------------------------- */ -->






<div class="navegacion my-3 py-3">
      <nav class="nav-principal navbar-expand-lg navbar-light bg-faded">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav_principal" arial-label="Mostrar navegavion">
          <span class="navbar-toggler-icon  "></span>
        </button>

        <div class="container">

          <div class="collapse navbar-collapse w-100" id="nav_principal">

            <ul class="nav nav-justified w-100 flex-column flex-md-row"> 
              
            <?php

              $archivo = basename( $_SERVER['PHP_SELF']);
              $pagina = str_replace('.php', '', $archivo);

            ?>

              <li class="nav-item <?php echo 'index' === $pagina ? 'activa' : '' ?>"><a href="index.php" class="nav-link">Inicio</a></li>
              <li class="nav-item <?php echo 'nosotros' === $pagina ? 'activa' : '' ?>"><a href="nosotros.php" class="nav-link">Nosotros</a></li>
              <li class="nav-item <?php echo 'servicios' === $pagina ? 'activa' : '' ?>"><a href="servicios.php" class="nav-link">Servicios</a></li>
              <li class="nav-item <?php echo 'productos' === $pagina ? 'activa' : '' ?>"><a href="productos.php" class="nav-link">Productos</a></li>
              <li class="nav-item <?php echo 'contacto' === $pagina ? 'activa' : '' ?>"><a href="contacto.php" class="nav-link">Contacto</a></li>
            </ul>

          </div>

        </div>

      </nav>
    </div>