
@include('include.head')
@include('include.menu')
@include('include.message')
  <div class="parallax-container valign-wrapper center-align header">
      <div class="parallax"><img src="images/background.webp" alt="parallax"></div>
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
    <div class="parallax"><img src="images/background4.webp" style="filter: blur(5px);" alt="background"></div>
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
            <img src="images/technology/laravel.webp" alt="Laravel">
            Laravel
        </div>
      </a>
      <a href="https://www.javascript.com/">
        <div class="chip">
            <img src="images/technology/js-logo.webp" alt="Javascript">
            Javascript
        </div>
      </a>
      <a href="https://www.php.net/">
        <div class="chip">
            <img src="images/technology/php.webp" alt="php">
            PHP
        </div>
      </a>
      <a href="https://laravel-livewire.com/">
        <div class="chip">
            <img src="images/technology/livewire.webp" alt="Livewire">
            Livewire
        </div>
      </a>
      <a href="https://jquery.com/">
        <div class="chip">
            <img src="images/technology/jquery.webp" alt="jQuery">
            jQuery
        </div>
      </a>
      <a href="https://materializecss.com/">
        <div class="chip">
            <img src="images/technology/materialize.webp" alt="Materialize">
            MATERIALIZE
        </div>
      </a>
      <a href="https://github.com/">
        <div class="chip">
            <img src="images/technology/github.webp" alt="Github">
            GitHub
        </div>
      </a>
      <a href="https://gitlab.com/">
        <div class="chip">
            <img src="images/technology/gitlab.webp" alt="GitLab">
            GitLab
        </div>
      </a>
      </div>
    </div>
  </div>
  <div class="contact_container" style="display: flex; justify-content: center; text-align: center; margin-bottom: 10px">
    <div class="contact_inter" style="width: 80%; background-color: var(--color-3); border-radius: 20px;">
        <div class="contact-pic" style="width: 40%;float: left;">
            <img class="imagenEmail" src="{{ asset('images/sendmessage.webp') }}" alt="Send email" style="width: 80%; margin-top: 20%; border-radius: 10px; box-shadow: rgb(0, 0, 0) 10px 10px 25px 0px;">
        </div>
        <div class="contact-content" style="width: 60%;float: right;">
            <h5 style="color: #fff; font-weight:bold">Contáctame</h5>
            <form class="" id="contacto" action="{{url('sendmail')}}" method="post">
                @csrf
                <input type="hidden" name="reToken" id='reToken'>
              <div class="row container">
                <div class="row">
                  <div class="input-field col s12">
                    <input id="nombre" name="nombre" type="text" class="validate">
                    <label class="active" for="nombre" style="color:rgb(255, 255, 255); font-weight: bold;"> Nombres</label>
                  </div>
                  <div class="input-field col s12">
                    <input id="email" name="email" type="email" class="validate">
                    <label class="active" for="email" style="color:rgb(255, 255, 255); font-weight: bold;"> Correo</label>
                  </div>
                  <div class="input-field col s12">
                    <input id="telefono" name="telefono" type="tel" class="validate">
                    <label class="active" for="telefono" style="color:rgb(255, 255, 255); font-weight: bold;"> Teléfono</label>
                  </div>
                </div>
                <div class="form-floating">
                  <label for="mensaje" style="color:rgb(255, 255, 255); font-weight: bold; font-size:20px">Mensaje</label>
                  <textarea class="form-control active" placeholder="Ingrese su mensaje" id="mensaje" name="mensaje" style="height: 100px"></textarea>
                </div>
                <div class="col s12 m12 l12">
                  <button class="btn btnhove color-cuaternario black-font waves-effect waves-green" type="submit" id="BotonEnviar" name="button">Enviar</button>
                </div>
              </div>
            </form>
        </div>
    </div>
  </div>
  <style>
    .imagenEmail:hover {
        border-radius: 10px; box-shadow: rgb(0, 0, 0) 10px 10px 10px 0px!important;
    }
  </style>
  {{-- <div class="row color-terceario center-align message Ochentaporciento" id="contactame">
    <form class="" id="contacto" action="{{url('sendmail')}}" method="post">
      @csrf
      <input type="hidden" name="reToken" id='reToken'>
    <div class="row container">
      <h5>Contáctame</h5>
      <div class="row">
        <div class="input-field col s12">
          <input id="nombre" name="nombre" type="text" class="validate">
          <label class="active" for="nombre" style="color:black; font-weight: bold;"> Nombres</label>
        </div>
        <div class="input-field col s6">
          <input id="email" name="email" type="email" class="validate">
          <label class="active" for="email" style="color:black; font-weight: bold;"> Correo</label>
        </div>
        <div class="input-field col s6">
          <input id="telefono" name="telefono" type="tel" class="validate">
          <label class="active" for="telefono" style="color:black; font-weight: bold;"> Teléfono</label>
        </div>
      </div>
      <div class="form-floating">
        <label for="mensaje" style="color:black; font-weight: bold;">Mensajes</label>
        <textarea class="form-control active" placeholder="Ingrese su mensaje aqui" id="mensaje" name="mensaje" style="height: 100px"></textarea>
      </div>
      <div class="col s12 m12 l12">
        <button class="btn btnhove color-cuaternario black-font waves-effect waves-green" type="submit" id="BotonEnviar" name="button">Enviar</button>
      </div>
    </div>
    </form>
  </div> --}}
@include('include.footer')
