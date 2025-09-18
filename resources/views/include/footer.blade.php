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
          <li><a class="grey-text text-lighten-3" href="https://www.linkedin.com/in/frank-catamo"><img src="{{asset('images/linkedin.webp')}}" style="width:32px" alt="Logo linkedin"></a></li>
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
<!--Let browser know website is optimized for mobile-->
<script src="{{ asset('js/jquery-3.6.0.min.js') }}" charset="utf-8"></script>
<script type="text/javascript" src="{{ asset('js/materialize.min.js')}}?v={{ env('VERSION_PUBLIC') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.sidenav').sidenav();
        $('.parallax').parallax();
        $('.carousel').carousel();
    });
</script>
<script src="js/master.js" charset="utf-8"></script>
<script>
    grecaptcha.ready( function(){
        grecaptcha.execute(
            '6Ldm8a4qAAAAAE_Cw_bnj3F7vMub8EjGoDgeE7g7',{ action: 'formulario' }
        ).then( function( respuesta_token ){
            const itoken = document.getElementById('reToken');
            // const btn = document.getElementById('btn');
            itoken.value = respuesta_token;
            // btn.disabled = false;
        })
    });
</script>
</body>
</html>
