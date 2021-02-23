            <!-- /* 

----------------------------------------------------------------------------------------------------------------------------------------------------------------
                                  Header  &  Nav
---------------------------------------------------------------------------------------------------------------------------------------------------------------- */ -->




<?php

  $titulo = 'Nosotros |';
  include 'templates\header.php';
  include 'templates/nav.php';

?>











        <!-- /* 

----------------------------------------------------------------------------------------------------------------------------------------------------------------
                                  Hero    ////////////////   Modal
---------------------------------------------------------------------------------------------------------------------------------------------------------------- */ -->











<div class="container">

  <div class="row no-gutters">

    <div class="col-12 hero">
      <img src="img/nosotros.jpg" alt="nosotros" class="img-fluid">
      <h2 class="text-uppercase d-none d-md-block py-3 px-5">Nosotros</h2>
    </div>

  </div>

</div>




<div class="container">

  <div class="row">

    <main class="col-lg-8 contenido-principal">
      <h2 class="d-block d-md-none m-sm-3 text-uppercase text-center">Nosotros</h2>
      <p class="mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste ullam provident sed labore officiis, veritatis fuga praesentium vitae temporibus sapiente, suscipit mollitia, totam odio. Nostrum eligendi ad accusantium. Aut, voluptatibus?</p>
      <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, amet id sapiente, temporibus illum iure ipsa porro in tempora recusandae, officia quisquam. Cumque repudiandae beatae molestias quisquam, atque odit soluta.</p>

      <h1 class="text-uppercase center-text textfirst text-center">Conoce nuestras
        <span class="d-block text-lowercase">Instalaciones</span>
      </h1>


      <div class="imagenes pt-4 text-center">
        <a href="#" data-target="#imagen1" data-toggle="modal">
          <img src="img/galeria_mini_01.jpg" alt="Instalaciones 1" class="img-fluid col-md-3 col-sm-12 mt-2 px-0">
        </a>


        <a href="#" data-target="#imagen2" data-toggle="modal">
          <img src="img/galeria_mini_02.jpg" alt="Instalaciones 2" class="img-fluid col-md-3 col-sm-12 mt-2 px-0">
        </a>


        <a href="#" data-target="#imagen3" data-toggle="modal">
          <img src="img/galeria_mini_03.jpg" alt="Instalaciones 3" class="img-fluid col-md-3 m-0 col-sm-12 mt-2 px-0">
        </a>


        <div class="modal fade" id="imagen1" tabindex="-1" role="dialog" aria-labelledby="Imagen 1" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <img src="img/galeria_grande_01.jpg" alt="Imagen1" class="img-fluid">
              </div>
            </div>
          </div>
        </div>



        <div class="modal fade" id="imagen2" tabindex="-1" role="dialog" aria-labelledby="Imagen 1" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <img src="img/galeria_grande_02.jpg" alt="Imagen1" class="img-fluid">
              </div>
            </div>
          </div>
        </div>



        <div class="modal fade" id="imagen3" tabindex="-1" role="dialog" aria-labelledby="Imagen 1" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <img src="img/galeria_grande_03.jpg" alt="Imagen1" class="img-fluid">
              </div>
            </div>
          </div>
        </div>


      </div>
    </main>




            <!-- /* 

----------------------------------------------------------------------------------------------------------------------------------------------------------------
                                  Aside ///////// Horario
---------------------------------------------------------------------------------------------------------------------------------------------------------------- */ -->





    <aside class="col-lg-4 pt-4 pt-lg-0 align-self-center">

      <div class="siddebar horario p-3 mt-4">
        <h2 class="text-uppercase text-center mt-4">Horario:</h2>

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

    </aside>


  </div>

</div>








            <!-- /* 

----------------------------------------------------------------------------------------------------------------------------------------------------------------
                                  Footer
---------------------------------------------------------------------------------------------------------------------------------------------------------------- */ -->




<?php

  include 'templates/footer.php'

?>