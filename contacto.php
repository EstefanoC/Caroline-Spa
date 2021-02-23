            <!-- /* 

----------------------------------------------------------------------------------------------------------------------------------------------------------------
                                  Header  &  Nav
---------------------------------------------------------------------------------------------------------------------------------------------------------------- */ -->




<?php

  $titulo = 'Contacto |';
  include 'templates\header.php';
  include 'templates/nav.php'

?>










        <!-- /* 

----------------------------------------------------------------------------------------------------------------------------------------------------------------
                                  Hero
---------------------------------------------------------------------------------------------------------------------------------------------------------------- */ -->











<div class="container">

  <div class="row no-gutters">

    <div class="col-12 hero">
      <img src="img/contacto.jpg" alt="nosotros" class="img-fluid">
      <h2 class="text-uppercase d-none d-md-block py-3 px-5">Contacto</h2>
    </div>

  </div>

</div>




<div class="container">

  <div class="row justify-content-center">

    <main class="col-lg-8 contenido-principal">
      <h2 class="d-block d-md-none text-uppercase text-center">Contacto</h2>












        <!-- /* 

----------------------------------------------------------------------------------------------------------------------------------------------------------------
                                  Form
---------------------------------------------------------------------------------------------------------------------------------------------------------------- */ -->

      





<form action="contacto.php" method="POST" class="p-5 mt-5 formulario needs-validation" novalidate>

  <div class="form-group">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Por ejemplo: Juan" required>
    <div class="invalid-feedback">El nombre es necesario</div>
    <div class="valid-feedback">Correcto</div>
  </div>


  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Por ejemplo: ejemplo@gmail.com" required>
    <div class="invalid-feedback">El Email es necesario</div>
    <div class="valid-feedback">Correcto</div>
  </div>


  <div class="form-group">
    <label for="mensaje">Mensaje:</label>
    <textarea id="mensaje" name="mensaje" class="form-control" required></textarea>
    <div class="invalid-feedback">El mensaje es necesario</div>
    <div class="valid-feedback">Correcto</div>
  </div>

  <input type="submit" class="btn btn-primary text-uppercase" value="Enviar">
  <span class="sendoff" id="sendoff">Correo enviado</span>

</form>






    </main>



  </div>

</div>










            <!-- /* 

----------------------------------------------------------------------------------------------------------------------------------------------------------------
                                  Footer
---------------------------------------------------------------------------------------------------------------------------------------------------------------- */ -->



<?php

  include 'templates/footer.php'

?>