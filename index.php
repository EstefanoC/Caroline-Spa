            <!-- /* 

----------------------------------------------------------------------------------------------------------------------------------------------------------------
                                  Header  &  Nav
---------------------------------------------------------------------------------------------------------------------------------------------------------------- */ -->




<?php

  include 'templates/header.php';
  include 'templates/nav.php';
  include 'include/funciones.php';

?>








            <!-- /* 

----------------------------------------------------------------------------------------------------------------------------------------------------------------
                                  Slider
---------------------------------------------------------------------------------------------------------------------------------------------------------------- */ -->









    <div class="container">


      <div id="slider-principal" class="carousel slide mt-4" data-ride="carousel">

        <ol class="carousel-indicators">
          <li data-target="#slider-principal" data-slide-to="0" class="active"></li>
          <li data-target="#slider-principal" data-slide-to="1"></li>
          <li data-target="#slider-principal" data-slide-to="2"></li>
        </ol>


        <div class="carousel-inner" role="listbox">


          <div class="carousel-item active">
            <img src="img/slide_01.jpg" alt="Nuestras instalaciones">
            <div class="carousel-caption">
              <h3 class="text-uppercase">Nuevas instalaciones</h3>
            </div>
          </div>


          <div class="carousel-item">
            <img src="img/slide_02.jpg" alt="Conoce nuestros servicios">
            <div class="carousel-caption">
              <h3 class="text-uppercase">Conoce nuestros servicios</h3>
            </div>
          </div>


          <div class="carousel-item">
            <img src="img/slide_03.jpg" alt="2x1 En todos los servicios">
            <div class="carousel-caption">
              <h3 class="text-uppercase">2x1 En todos los servicios, aprovecha!</h3>
            </div>


          </div>


        </div>

        <a href="#slider-principal" class="carousel-control-prev" data-slide="prev" role="button">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>

        <a href="#slider-principal" class="carousel-control-next" data-slide="next" role="button">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>

      </div>

      
    </div>




            <!-- /* 

----------------------------------------------------------------------------------------------------------------------------------------------------------------
                                  Section
---------------------------------------------------------------------------------------------------------------------------------------------------------------- */ -->



<section class="section-frase">
  <h2 class="text-uppercase text-center py-5 textfirst">
    <span class="text-lowercase d-block">Bienvenido a nuestro</span>Sitio Web
  </h2>
  <p class="text-center">Te sentirás como nuevo(a) con nuestros
    <br>
    Masajistas profesionales
  </p>
</section>






            <!-- /* 

----------------------------------------------------------------------------------------------------------------------------------------------------------------
                                  Grid
---------------------------------------------------------------------------------------------------------------------------------------------------------------- */ -->






<div class="container">

  <div class="row">

    <div class="col-lg-4 mb-sm-5 text-center">
      <div class="imagen-servicios">
        <img src="img/servicio_01.jpg" alt="Servicio" class="img-fluid">
        <div class="row no-gutters justify-content-center">
          <div class="col-md-10 pt-4 imagen-info">
            <h3 class="text-uppercase text-center textfirst">
              <span class="text-center text-lowercase">Conoce sobre</span>
              Nosotros
            </h3>
            <button class="btn btn-block text-uppercase mt-4 py-3">Leer más</button>
          </div>
        </div>
      </div>
    </div>



    <div class="col-lg-4 mb-sm-5 text-center">
      <div class="imagen-servicios">
        <img src="img/servicio_02.jpg" alt="Servicio" class="img-fluid">
        <div class="row no-gutters justify-content-center">
          <div class="col-md-10 pt-4 imagen-info">
            <h3 class="text-uppercase text-center textfirst">
              <span class="text-center text-lowercase">Nuestros</span>
              Servicios
            </h3>
            <button class="btn btn-block text-uppercase mt-4 py-3">Leer más</button>
          </div>
        </div>
      </div>
    </div>


    <div class="col-lg-4 mb-sm-5 text-center">
      <div class="imagen-servicios">
        <img src="img/servicio_03.jpg" alt="Servicio" class="img-fluid">
        <div class="row no-gutters justify-content-center">
          <div class="col-md-10 pt-4 imagen-info">
            <h3 class="text-uppercase text-center textfirst">
              <span class="text-center text-lowercase">Visita nuestra</span>
              Tienda
            </h3>
            <button class="btn btn-block text-uppercase mt-4 py-3">Leer más</button>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>








            <!-- /* 

----------------------------------------------------------------------------------------------------------------------------------------------------------------
                                  Horario
---------------------------------------------------------------------------------------------------------------------------------------------------------------- */ -->





<div class="horario">
  <div class="container">

    <div class="row">

      <div class="col-md-6 p-4">

        <h2 class="text-uppercase text-center">Horario:</h2>

        <p class="text-center lead mt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur tempore dolores quasi ipsum autem voluptatibus architecto adipisci ea eum? Voluptas, similique neque accusamus aperiam ex eveniet dolorem culpa deserunt nobis?</p>


        <table class="table table-hover text-center mt-5">

          <thead>
            <tr>
              <th class="text-center">Día</th>
              <th class="text-center">De</th>
              <th class="text-center">Hasta</th>
          </tr>
          </thead>
          <tbody>
            <tr>
              <td>Lunes</td>
              <td>9:00</td>
              <td>19:00</td>
            </tr>
            <tr>
              <td>Martes</td>
              <td>9:00</td>
              <td>19:00</td>
            </tr>
            <tr>
              <td>Miercoles</td>
              <td>9:00</td>
              <td>19:00</td>
            </tr>
            <tr>
              <td>Jueves</td>
              <td>9:00</td>
              <td>19:00</td>
            </tr>
            <tr>
              <td>Viernes</td>
              <td>9:00</td>
              <td>19:00</td>
            </tr>
            <tr>
              <td>Sabado</td>
              <td>10:00</td>
              <td>20:00</td>
            </tr>
            <tr>
              <td>Domingo</td>
              <td>Cerrado</td>
              <td>Cerrado</td>
            </tr>
          </tbody>
          
        </table>

      </div>

      <div class="col-md-6 img-horario"></div>
      
    </div>

  </div>
</div>







            <!-- /* 

----------------------------------------------------------------------------------------------------------------------------------------------------------------
                                  Productos
---------------------------------------------------------------------------------------------------------------------------------------------------------------- */ -->






<section class="container productos py-5">

  <h2 class="text-uppercase text-center section-frase textfirst"><span class="text-lowercase d-block">Nuestros</span>
  Productos
  </h2>

  <div class="row py-5">

    <?php

            $productos = obtenerPro(4);
            while($producto = $productos->fetch_assoc()) {

    ?>

    <div class="col-md-3 mb-sm-3">

      <div class="card">
        <a href="producto.php?id=<?php echo $producto["id"]; ?>">
          <img src="img/<?php echo $producto["imagen_mini"]; ?>" alt="Producto" class="card-img-top">
          <div class="card-body">
            <h3 class="card-tittle text-center text-uppercase"><?php echo $producto["nombre"]; ?></h3>
            <p class="card-text text-uppercase"><?php echo $producto["descripcion_corta"]; ?></p>
            <p class="precio text-center lead mb-0"><?php echo $producto["precio"]; ?></p>
          </div>
        </a>
      </div>

    </div>

          <?php } ?>

  </div>

</section>






            <!-- /* 

----------------------------------------------------------------------------------------------------------------------------------------------------------------
                                  Footer & Citas
---------------------------------------------------------------------------------------------------------------------------------------------------------------- */ -->




<?php

  include 'templates/citas.php';
  include 'templates/footer.php';

?>