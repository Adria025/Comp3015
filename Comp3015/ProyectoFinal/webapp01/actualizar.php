<?php

    include 'conexion.php';

    $sql = "UPDATE usuarios SET nombre='Adrian Candelaria Gonzalez', email = 'acandelaria6653@arecibointer.edu' WHERE nombre like 'Adrian Candelaria'"; 
    if ($conexion->query($sql) === TRUE) { 
        echo "Registro actualizado con éxito"; 
    } else { 
        echo "Error actualizando el registro: ";
        echo  $conexion->error; 
    }

?>