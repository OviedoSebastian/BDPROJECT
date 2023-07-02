//solicitud del login
/*$.ajax({
    url: 'ajaxhear.php', 
    method: 'POST', 
    dataType: 'json',
    data: {
      nombre: 'John',
      apellido: 'Doe'
      
    },
    success: function(response) {
      
      console.log(response); 
    },
    error: function(xhr, status, error) {
      
      console.log('Error en la solicitud: ' + error);
    }
  });*/

  
$(document).ready(function() {

  $('#login_form').submit(function(event) {
    // Prevenir el envío del formulario
    event.preventDefault();

    // Obtener los valores de usuario y contraseña
    var username = $('#username').val();
    var password = $('#password').val();

    $.ajax({
      url: './control/ajaxhear.php',
      method: 'POST',
      data: {
        action: "validaLogin",
        username: username,
        password: password
      },
      success: function(response) {
        // Aquí puedes manejar la respuesta del servidor
        console.log(response);
        window.open("https://www3.animeflv.net/ver/one-piece-tv-535");
      },
      error: function(xhr, status, error) {
        // Manejar errores
        console.log('Error en la solicitud: ' + error);
      }
    });
  });



  
});