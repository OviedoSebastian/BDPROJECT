<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/formulario_empleado.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>LiquorMinder</title>
</head>
<body>

<div class="formulario_empleado">

<form action="control/ajaxhear.php" id="empleadoBusqueda" method="POST">

    <div class="camposform_empleado">
        
        <div>
            <h2>Empleados</h2>

            <label>Ingrese el numero de documento</label>
        </div>
        
        <div>
            <input type="text" id="docEmp" name="username" required>
            <button class="botonbusquedaempleado" type="submit" id="busquedaEmpleado" >buscar</button>
        </div>
        
 
    </div>

    <div id="formularioEmpleado">

    </div>
    
</form>

</div>
</body>

<script src="js/javascript.js"></script>

</html>