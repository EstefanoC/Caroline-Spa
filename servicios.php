            <!-- /* 

----------------------------------------------------------------------------------------------------------------------------------------------------------------
                                  Header  &  Nav
---------------------------------------------------------------------------------------------------------------------------------------------------------------- */ -->




<?php

  $titulo = 'Servicios |';
  include 'templates\header.php';
  include 'templates/nav.php'

?>











        <!-- /* 

----------------------------------------------------------------------------------------------------------------------------------------------------------------
                                  Hero //////// collapse
---------------------------------------------------------------------------------------------------------------------------------------------------------------- */ -->











<div class="container">

  <div class="row no-gutters mb-4">

    <div class="col-12 hero">
      <img src="img/servicios.jpg" alt="nosotros" class="img-fluid">
      <h2 class="text-uppercase d-none d-md-block py-3 px-5">Servicios</h2>
    </div>

  </div>

</div>




<div class="container">

  <div class="row">

    <main class="col-lg-8 contenido-principal">
      <h2 class="d-block d-md-none text-uppercase text-center my-4">Servicios</h2>

      <div id="servicios" class="mb-3">

        <div class="card">
          <div class="card-header" id="servicio1">
            <h2 class="mb-0"></h2>
            <button class="btn btn-link btn-block" data-toggle="collapse" data-target="#descripcion1" aria-expanded="true" aria-controls="#descripcion1">Servicio 1</button>
          </div>
          <div class="collapse show" id="descripcion1" aria-labelledby="#servicio1" data-parent="#servicios">
            <div class="card-body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum mollitia itaque commodi placeat doloribus dicta eaque a alias? Libero sit debitis porro dicta fuga ut rem ipsam quia id ipsum?</div>
          </div>
        </div>



        <div class="card">
          <div class="card-header" id="servicio2">
            <h2 class="mb-0"></h2>
            <button class="btn btn-link btn-block" data-toggle="collapse" data-target="#descripcion2" aria-expanded="false" aria-controls="#descripcion2">Servicio 2</button>
          </div>
          <div class="collapse" id="descripcion2" aria-labelledby="#servicio2" data-parent="#servicios">
            <div class="card-body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum mollitia itaque commodi placeat doloribus dicta eaque a alias? Libero sit debitis porro dicta fuga ut rem ipsam quia id ipsum?</div>
          </div>
        </div>


        <div class="card">
          <div class="card-header" id="servicio3">
            <h2 class="mb-0"></h2>
            <button class="btn btn-link btn-block" data-toggle="collapse" data-target="#descripcion3" aria-expanded="false" aria-controls="#descripcion3">Servicio 3</button>
          </div>
          <div class="collapse" id="descripcion3" aria-labelledby="#servicio3" data-parent="#servicios">
            <div class="card-body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum mollitia itaque commodi placeat doloribus dicta eaque a alias? Libero sit debitis porro dicta fuga ut rem ipsam quia id ipsum?</div>
          </div>
        </div>

      </div>

    </main>










        <!-- /* 

----------------------------------------------------------------------------------------------------------------------------------------------------------------
                                  Aside ////////  Cupon
---------------------------------------------------------------------------------------------------------------------------------------------------------------- */ -->







<aside class="col-lg-4 p-2 mb-3 cupon">

  <div class="siddebar">
    <h2 class="text-center text-uppercase mt-4">Nuevos clientes</h2>
    <p class="lead text-center mt-4">Recibe 20% con este cupon</p>
  </div>

  <div class="cupon-cut p-1 mt-5 ">
    <p class="text-uppercase text-center"><span class="d-block">20% Descuento</span>en todos los servicios</p>
  </div>

</aside>


</div>

</div>








            <!-- /* 

----------------------------------------------------------------------------------------------------------------------------------------------------------------
                                  Footer & Citas
---------------------------------------------------------------------------------------------------------------------------------------------------------------- */ -->




<?php

  
  include 'templates/citas.php';
  include 'templates/footer.php';

?>