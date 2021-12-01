
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
        <div class="parallax-container  valign-wrapper center-align">
          <div class="parallax"><img src="images/background.jpg"></div>
          <div class="row">
            <div class="col s12 m12 l12">
              <h1>Hola, Soy Frank Catamo</h1>
            </div>
            <div class="col s12 m12 l12">
              <h2 class="">Ing. En Computación y Desarrollador Web</h2>
              <span class="Detalles">Desarrollador Web FullStack con 4 años de experiencia en LARAVEL</span>
              <!-- <span class="Detalles">MANEJO DISTINTAS TECNOLOGIAS COMO LARAVEL, BOOSTRAP, LIVEWIRE, MATERIALIZE, JAVASCRIPT, CSS, HTML5, ENTRE OTRAS.</span> -->
            </div>
          </div>
        </div>
        <div class="color-terceario row altosetenta valign-wrapper" id="quiensoy">
          <div class="row">
            <div class="container">
              <div class="col s12 m12 l12">
                <h3 class="center-align">¿Quién Soy?</h3>
                <span class="definicion">Soy un Ingeniero en computación egresado de la <a href="http://www.uft.edu.ve/" class="link"> UFT, </a> me desenvuelvo como desarrollador FullStack en tecnologías como Laravel, Livewire, Javascript entre otras. He trabajado con varias áreas como Analista Service Desk nivel I y II.</span>
              </div>
            </div>
          </div>
        </div>
        <div class="parallax-container altonoventa center-align" id="proyectos">
          <div class="parallax"><img src="images/background4.jpg" style="filter: blur(5px);"></div>
          <div class="row container">
            <h3 class="center-aling white-font">Algunos proyectos</h3>
            <span class="white-font">He trabajado en los siguientes proyectos.</span>
            <div class="carousel">
              <a class="carousel-item" href="https://www.saludvitale.com" target="_blank" title="Proyecto"><img src="images/proyectos/SaludVitale.jpg"></a>
              <a class="carousel-item" href="https://www.toyocarrocerias.com" target="_blank" title="Proyecto como freelance"><img src="images/proyectos/ToyoCarrocerias.jpg"></a>
              <a class="carousel-item" href="https://vipo360.com/" target="_blank" title="Proyecto como freelance"><img src="images/proyectos/vipo360.jpg"></a>
              <a class="carousel-item" href="https://www.saludvitale.com" target="_blank" title="Proyecto"><img src="images/proyectos/SaludVitale.jpg"></a>
              <a class="carousel-item" href="https://www.toyocarrocerias.com" target="_blank" title="Proyecto como freelance"><img src="images/proyectos/ToyoCarrocerias.jpg"></a>
              <a class="carousel-item" href="https://vipo360.com/" target="_blank" title="Proyecto como freelance"><img src="images/proyectos/vipo360.jpg"></a>
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
                <img src="images/technology/js-logo.jpg" alt="Javascript">
                Javascript
              </div>
              <div class="chip">
                <img src="images/technology/php.png" alt="php">
                PHP
              </div>
              <div class="chip">
                <img src="images/technology/livewire.png" alt="Livewire">
                Livewire
              </div>
              <div class="chip">
                <img src="images/technology/jquery.png" alt="jQuery">
                jQuery
              </div>
              <div class="chip">
                <img src="images/technology/materialize.png" alt="Materialize">
                MATERIALIZE
              </div>
              <div class="chip">
                <img src="images/technology/github.png" alt="Github">
                GitHub
              </div>
              <div class="chip">
                <img src="images/technology/gitlab.png" alt="GitLab">
                GitLab
              </div>
            </div>
          </div>
        </div>
        <div class="row color-terceario center-align" id="contactame">
          <form class="" action="enviado.php" method="post">
          <div class="row container">
            <h5>Contáctame</h5>
            <div class="col s4 m4 l4">
              <label for="nombre" class="black-font">Nombre</label>
              <input type="text" name="nombre" value="">
            </div>
            <div class="col s4 m4 l4">
              <label for="email" class="black-font">Correo</label>
              <input type="text" name="email" value="">
            </div>
            <div class="col s4 m4 l4">
              <label for="telefono" class="black-font">Teléfono</label>
              <input type="text" name="telefono" value="">
            </div>
            <div class="col s12 m12 l12">
              <label for="mensaje" class="black-font">Mensaje</label>
              <textarea name="mensaje" rows="8" cols="80" maxlength="300"></textarea>
            </div>
            <div class="col s12 m12 l12">
              <button class="btn color-cuaternario black-font waves-effect waves-teal" type="submit" name="button">Enviar</button>
            </div>
          </div>
          </form>
        </div>
        <footer class="page-footer color-principal">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Frank Catamo</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
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
