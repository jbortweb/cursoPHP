<?php

try {

    $conexion = new PDO('mysql:host=localhost;dbname=prueba_consola', 'root', '');
    echo "Conexion ok";

    //Se trabaja con los datos dentro de la funcion para comprobar errores.

}catch(PDOException $e){

    echo "Error: " . $e->getMessage();

}

?>