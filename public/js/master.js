$(document).ready(function() {
  // $("#BotonEnviar").on('click',function(e){
  //   e.preventDefault();
  //   let nombre = $("#nombre").val();
  //   let email = $("#email").val();
  //   let telefono = $("#telefono").val();
  //   let mensaje = $("#mensaje").val();
  //   if (nombre==''||email==''||telefono==''||mensaje=='') {
  //     let texto=" Los siguientes campos faltan por rellenar ";
  //     if (nombre=='') {
  //       texto=texto+" <b>Nombre,</b> ";
  //     }
  //     if (email=='') {
  //       texto=texto+" <b>Email,</b> ";
  //     }
  //     if (telefono=='') {
  //       texto=texto+" <b>Teléfono</b> ";
  //     }
  //     if (mensaje=='') {
  //       texto=texto+" <b>Mensaje</b> ";
  //     }
  //     Swal.fire({
  //       position:'center',
  //       icon: 'warning',
  //       html: texto,
  //       confirmButtonColor: '#3085d6',
  //     });
  //   }else {
  //     $.ajax({
  //       url: 'enviado.php',
  //       method: 'POST',
  //       data: {
  //         nombre:nombre,
  //         email:email,
  //         telefono:telefono,
  //         mensaje:mensaje
  //       },
  //       success: function(data) {
  //         if (JSON.parse(data).success==true) {
  //           Swal.fire({
  //             position: 'top-end',
  //             icon: 'success',
  //             title: 'Mensaje enviado',
  //             showConfirmButton: false,
  //             timer: 1500
  //           })
  //           $("#nombre").val('');
  //           $("#email").val('');
  //           $("#telefono").val('');
  //           $("#mensaje").val('');
  //         }else {
  //           Swal.fire({
  //             position:'center',
  //             icon: 'error',
  //             title: 'Algo salio mal',
  //             html: texto,
  //             confirmButtonColor: '#3085d6',
  //           });
  //         }
  //       }
  //     });
  //   }
  // });
});
posicionarMenu();
$(window).scroll(function() {    
    posicionarMenu();
});
function posicionarMenu() {
    // var altura_del_header = $('.marginbottomcero').outerHeight(true);
    // var altura_del_menu = $('.menu').outerHeight(true);
    if ($(window).scrollTop() >= 6){
        $('.menu').addClass('fixed');
    } else {
        $('.menu').removeClass('fixed');
    }
}
