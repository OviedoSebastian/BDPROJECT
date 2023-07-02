<?php
include ('control.php');

$action = $_POST['action'];

switch ($action){

    case 'validaLogin':
        $result = validaLogin( $_POST['username'], $_POST['password'] );
        break;
    
    default:
        $result = "no funciona";
        break;
}

// Configurar las cabeceras de respuesta para indicar que se envía JSON
header('Content-Type: application/json');

// Enviar la respuesta en formato JSON
echo json_encode($result);
?>