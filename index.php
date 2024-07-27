<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <!--Import Google Icon Font-->
      <link defer href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/master.css">
      <!--Let browser know website is optimized for mobile-->
      <script src="js/jquery-3.6.0.min.js" charset="utf-8"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Ing. Frank Catamo</title>
      <!-- <meta name="description" content="Portafolio personal y profesional de Frank Catamo."> -->
      <meta name="description" content="Portafolio personal y profesional de Frank Catamo.">
      <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    <body>
      <section class="row marginbottomcero menu">
        <nav>
          <div class="nav-wrapper color-principal">
            <a href="#!" class="brand-logo "> <img class="logomenu" src="images/logo.png" alt="Logotipo"> </a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a class="btnMenu" href="#quiensoy">Conóceme</a></li>
              <li><a class="btnMenu" href="#proyectos">Proyectos</a></li>
              <li><a class="btnMenu" href="#tecnologias">Tecnologías</a></li>
              <li><a class="btnMenu" href="#contactame">Contáctame</a></li>
            </ul>
          </div>
        </nav>
        <ul class="sidenav" id="mobile-demo">
          <li><a href="#quiensoy">Conóceme</a></li>
          <li><a href="#proyectos">Proyectos</a></li>
          <li><a href="#tecnologias">Tecnologías</a></li>
          <li><a href="#contactame">Contáctame</a></li>
        </ul>
      </section>
        <div class="parallax-container valign-wrapper center-align header">
          <div class="parallax"><img src="images/background.webp"></div>
          <div class="row">
            <div class="col s12 m12 l12">
              <h1 class="title1 shadows">Hola, Soy Frank Catamo</h1>
            </div>
            <div class="col s12 m12 l12">
              <h2 class="title2 shadows">Ing. En Computación y Desarrollador Web</h2>
              <span class="Detalles">Desarrollador Web FullStack con <?php echo date('Y')-2018 ?> años de experiencia en LARAVEL</span>
              <!-- <span class="Detalles">MANEJO DISTINTAS TECNOLOGIAS COMO LARAVEL, BOOSTRAP, LIVEWIRE, MATERIALIZE, JAVASCRIPT, CSS, HTML5, ENTRE OTRAS.</span> -->
            </div>
          </div>
        </div>
        <div class="color-terceario row altosetenta valign-wrapper quiensoy" id="quiensoy">
          <div class="row">
            <div class="container">
              <div class="col s12 m12 l12">
                <h3 class="center-align short white-font shadows">¿Quién Soy?</h3>
                <span class="definicion short white-font shadows">Soy un Ingeniero en computación egresado de la <a href="http://www.uft.edu.ve/" class="link"><span class='white-font'> UFT, </span></a> me desenvuelvo como desarrollador FullStack en tecnologías como Laravel, Livewire, Javascript entre otras. He trabajado con varias áreas como Analista Service Desk nivel I y II.</span>
              </div>
            </div>
          </div>
        </div> 
        <div class="parallax-container altonoventa center-align" id="proyectos">
          <div class="parallax"><img src="images/background4.webp" style="filter: blur(5px);"></div>
          <div class="row container">
            <h3 class="center-aling white-font shadows">Algunos proyectos</h3>
            <span class="white-font font-size shadows">He trabajado en los siguientes proyectos.</span>
            <div class="carousel">
              <a class="carousel-item" href="https://www.saludvitale.com" target="_blank" title="Proyecto"><img src="images/proyectos/SaludVitale.webp" alt="SaludVitale"></a>
              <a class="carousel-item" href="https://www.toyocarrocerias.com" target="_blank" title="Proyecto como freelance"><img src="images/proyectos/ToyoCarrocerias.webp" alt="ToyoCarrocerias"></a>
              <!-- <a class="carousel-item" href="https://vipo360.com/" target="_blank" title="Proyecto como freelance"><img src="images/proyectos/vipo360.webp" alt="vipo360"></a> -->
              <a class="carousel-item" href="https://www.saludvitale.com" target="_blank" title="Proyecto"><img src="images/proyectos/SaludVitale.webp" alt="SaludVitale"></a>
              <a class="carousel-item" href="https://www.toyocarrocerias.com" target="_blank" title="Proyecto como freelance"><img src="images/proyectos/ToyoCarrocerias.webp" alt="ToyoCarrocerias"></a>
              <!-- <a class="carousel-item" href="https://vipo360.com/" target="_blank" title="Proyecto como freelance"><img src="images/proyectos/vipo360.webp" alt="vipo360"></a> -->
            </div>
          </div>
        </div>
        <div class="row color-cuaternario center-align textura1" id="tecnologias">
          <div class=" container">
            <h5>TECNOLOGIAS</h5>
            <div class="col s12 m12 l12 center-align sombreado">
              <a href="https://laravel.com/">
              <div class="chip">
                  <img src="images/technology/laravel.png" alt="Laravel">
                  Laravel
              </div>
            </a>
            <a href="https://www.javascript.com/">
              <div class="chip">
                  <img src="images/technology/js-logo.jpg" alt="Javascript">
                  Javascript
              </div>
            </a>
            <a href="https://www.php.net/">
              <div class="chip">
                  <img src="images/technology/php.png" alt="php">
                  PHP
              </div>
            </a>
            <a href="https://laravel-livewire.com/">
              <div class="chip">
                  <img src="images/technology/livewire.png" alt="Livewire">
                  Livewire
              </div>
            </a>
            <a href="https://jquery.com/">
              <div class="chip">
                  <img src="images/technology/jquery.png" alt="jQuery">
                  jQuery
              </div>
            </a>
            <a href="https://materializecss.com/">
              <div class="chip">
                  <img src="images/technology/materialize.png" alt="Materialize">
                  MATERIALIZE
              </div>
            </a>
            <a href="https://github.com/">
              <div class="chip">
                  <img src="images/technology/github.png" alt="Github">
                  GitHub
              </div>
            </a>
            <a href="https://gitlab.com/">
              <div class="chip">
                  <img src="images/technology/gitlab.png" alt="GitLab">
                  GitLab
              </div>
            </a>
            </div>
          </div>
        </div>
        <div class="row color-terceario center-align message" id="contactame">
          <form class="" id="contacto" action="" method="post">
          <div class="row container">
            <h5>Contáctame</h5>
            <div class="col s12 m4 l4">
              <label for="nombre" class="black-font fontShadow">Nombre</label>
              <input type="text" name="nombre" id="nombre">
            </div>
            <div class="col s12 m4 l4">
              <label for="email" class="black-font fontShadow">Correo</label>
              <input type="email" name="email" id="email">
            </div>
            <div class="col s12 m4 l4">
              <label for="telefono" class="black-font fontShadow">Teléfono</label>
              <input type="tel" name="telefono" id="telefono">
            </div>
            <div class="col s12 m12 l12">
              <label for="mensaje" class="black-font fontShadow">Mensaje</label>
              <textarea name="mensaje" rows="8" cols="80" maxlength="300" id="mensaje"></textarea>
            </div>
            <div class="col s12 m12 l12">
              <button class="btn color-cuaternario black-font waves-effect waves-teal" type="submit" id="BotonEnviar" name="button">Enviar</button>
            </div>
          </div>
          </form>
        </div>
        <footer class="page-footer color-principal">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Frank Catamo</h5>
                <p class="grey-text text-lighten-4">Si el plan no funciona, cambia el plan pero no cambies la Meta.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Redes Sociales</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="https://www.linkedin.com/in/frank-catamo"><img src="images/linkedin.png" style="width:32px" alt="Logo linkedin"></a></li>
                  <!-- <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li> -->
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
          @<?php echo date("Y");  ?> Frank Catamo
            <!-- <a class="grey-text text-lighten-4 right" href="#!">More Links</a> -->
            </div>
          </div>
        </footer>
      <!--JavaScript at end of body for optimized loading-->
      <script defer src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          $('.sidenav').sidenav();
          $('.parallax').parallax();
           $('.carousel').carousel();
        });
      </script>
      <script src="js/master.js" charset="utf-8"></script>
  </body>
</html>
