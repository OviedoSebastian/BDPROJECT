<?php
include("./sql/conexion.php")

function validaLogin($user, $password){

return $user;
}

function BuscaEmpleado($doc){

    
    $sql = "SELECT * FROM empleado
            WHERE NumeroIdentidad = '$doc'
            ";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Error al ejecutar la consulta: " . $conn->error);
    }
    
    if ($result && $result->num_rows > 0) {

        while ( $row = mysqli_fetch_array($result) ) {
            
            $result = array( 
            'IdEmpleado'  => $row['IdEmpleado'], 
            'PrimerNombre' => $row['PrimerNombre'],
            'SegundoNombre' => $row['SegundoNombre'],
            'PrimerApellido' => $row['PrimerApellido'],
            'SegundoApellido' => $row['SegundoApellido'],
            'IdRol1' => $row['IdRol1'],
            'Sexo' => $row['Sexo'],
            'IdTipoIdentidad2' => $row['IdTipoIdentidad2'],
            'NumeroIdentidad'=> $row['NumeroIdentidad'],
            'fechaNac' => $row['fechaNac'],
            'IdCargo1' => $row['IdCargo1'],
            'Direccion'=> $row['Direccion'],
            'Estado' => $row['Estado']
         );

        }

    } else {
        $result = "No se encontraron registros.";
    }
 mysqli_close($conn);

return $result;
}

?>