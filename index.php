
  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/master.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Ing. Frank Catamo</title>
      <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    <body>
      <section class="row marginbottomcero">
        <nav>
          <div class="nav-wrapper color-principal">
            <a href="#!" class="brand-logo "> <img class="logomenu" src="images/logo.png" alt="Logotipo"> </a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a class="btnMenu" href="#quiensoy">Conocome</a></li>
              <li><a class="btnMenu" href="#proyectos">Proyectos</a></li>
              <li><a class="btnMenu" href="#tecnologias">Tecnologias</a></li>
              <li><a class="btnMenu" href="#contactame">Contactame</a></li>
            </ul>
          </div>
        </nav>
        <ul class="sidenav" id="mobile-demo">
          <li><a href="#quiensoy">Conocome</a></li>
          <li><a href="#proyectos">Proyectos</a></li>
          <li><a href="#tecnologias">Tecnologias</a></li>
          <li><a href="#contactame">Contactame</a></li>
        </ul>
      </section>
        <div class="parallax-container">
          <div class="parallax"><img src="images/background.jpg"></div>
          <div class="center-align">
            <div class="row">
              <div class="col s12 m12 l12">
                <h1>Hola, soy Frank Catamo</h1>
              </div>
              <div class="col s12 m12 l12">
                <h2 class="">Desarrollador web e Ing. en computación</h2>
                <span class="Detalles">MANEJO DISTINTAS TECNOLOGIAS COMO LARAVEL, BOOSTRAP, LIVEWIRE, MATERIALIZE, JAVASCRIPT, CSS, HTML5, ENTRE OTRAS.</span>
              </div>
            </div>
          </div>
        </div>
        <div class="color-terceario row altosetenta " id="quiensoy">
          <div class="row">
            <div class="container">
              <div class="col s12 m12 l12">
                <h3 class="center-align">¿Quién Soy?</h3>
                <span class="definicion">Soy un fanático de la tecnología, me gusta el desarrollo de tecnología y la aplicación problemas. Me caracterizo por ser curioso y con interés es aprender del mundo tecnológico.</span>
              </div>
            </div>
          </div>
        </div>
        <div class="parallax-container altonoventa center-align" id="proyectos">
            <div class="parallax"><img src="images/background4.jpg" style="filter: blur(5px);"></div>
            <div class="row container">
              <h3 class="center-aling">Algunos proyectos</h3>
              <span>He trabajado en los siguientes proyectos.</span>
              <div class="carousel">
                <a class="carousel-item" href="https://www.saludvitale.com" target="_blank"><img src="images/proyectos/SaludVitale.jpg"></a>
                <a class="carousel-item" href="https://www.toyocarrocerias.com" target="_blank"><img src="images/proyectos/ToyoCarrocerias.jpg"></a>
                <a class="carousel-item" href="https://www.saludvitale.com" target="_blank"><img src="images/proyectos/SaludVitale.jpg"></a>
                <a class="carousel-item" href="https://www.toyocarrocerias.com" target="_blank"><img src="images/proyectos/ToyoCarrocerias.jpg"></a>
              </div>
            </div>
        </div>
        <div class="row color-cuaternario center-align" id="tecnologias">
          <div class=" container">
            <h5>TECNOLOGIAS</h5>
            <div class="col s12 m12 l12 center-align">
              <div class="chip">
                <img src="images/technology/laravel.png" alt="Laravel">
                Laravel
              </div>
              <div class="chip">
                <img src="images/technology/livewire.png" alt="Livewire">
                Livewire
              </div>
              <div class="chip">
                <img src="images/technology/jQuery.png" alt="jQuery">
                jQuery
              </div>
              <div class="chip">
                <img src="images/technology/materialize.png" alt="Materialize">
                MATERIALIZE
              </div>
            </div>
          </div>
        </div>
        <div class="row color-terceario center-align" id="contactame">
          <form class="" action="enviado.php" method="post">
          <div class="row container">
            <h5>Contáctame</h5>
            <div class="col s4 m4 l4">
              <input type="text" name="nombre" value="">
              <label for="nombre" class="black-font">Nombre</label>
            </div>
            <div class="col s4 m4 l4">
              <input type="text" name="email" value="">
              <label for="email" class="black-font">Correo</label>
            </div>
            <div class="col s4 m4 l4">
              <input type="text" name="telefono" value="">
              <label for="telefono" class="black-font">Teléfono</label>
            </div>
            <div class="col s12 m12 l12">
              <textarea name="mensaje" rows="8" cols="80" maxlength="300"></textarea>
              <label for="mensaje" class="black-font">Mensaje</label>
            </div>
            <div class="col s12 m12 l12">
              <button class="btn color-cuaternario black-font" type="submit" name="button">Enviar</button>
            </div>
          </div>
          </form>
        </div>
        <footer class="row center-align color-principal">
          <div class="col s8 m8 l8">
            <h5>Frank Catamo </h5><span> @<?php echo date("Y");  ?></span>
          </div>
          <div class="col s4 m4 l4">
            <img src="images/linkedin.png" style="width:32px" alt="Logo linkedin">
          </div>
        </footer>
      <!--JavaScript at end of body for optimized loading-->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          $('.sidenav').sidenav();
          $('.parallax').parallax();
           $('.carousel').carousel();
        });
      </script>
    </body>
  </html>
