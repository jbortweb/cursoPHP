<?php

try {

    $conexion = new PDO('mysql:host=localhost;dbname=prueba_consola', 'root', '');

}catch(PDOException $e){

    echo "Error: " . $e->getMessage();

}

?>