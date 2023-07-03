
$(document).ready(function() {

  //envio de informacion del login
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
        action: "validaLogin", //action que se valida en el ajaxhear
        username: username,
        password: password
      },
      success: function(response) {
        // respuesta del servidor
        console.log(response);
        window.open("./panel_de_control.php");
      },
      error: function(xhr, status, error) {
        // Manejo errores
        console.log('Error en la solicitud: ' + error);
      }
    });
  });

//envio de informacion y manejo de campos para el formulario de empleado
$('#empleadoBusqueda').submit(function(event) {
  // Prevenir el envío del formulario
  event.preventDefault();

  // Obtener los valores de usuario y contraseña
  var docempleado = $('#docEmp').val();

  $.ajax({
    url: './control/ajaxhear.php',
    method: 'POST',
    data: {
      action: "BuscaEmpleado", //action que se valida en el ajaxhear
      docempleado: docempleado
    },
    success: function(response) {
      // respuesta del servidor
      console.log(response);
    },
    error: function(xhr, status, error) {
      // Manejo errores
      console.log('Error en la solicitud: ' + error);
    }
  });
});

  
});