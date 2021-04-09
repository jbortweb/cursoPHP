<?php


// No utilizar por peligro de inyeccion de codigo desde el navegador

try {

    $conexion = new PDO('mysql:host=localhost;dbname=prueba_consola', 'root', '');

    $resultados = $conexion->query('SELECT * FROM usuarios');

    foreach ($resultados as $filas) {

        echo $filas ['id'].' - '.$filas ['nombre'].' - '.$filas ['email'].'<br>';
    }
    

}catch(PDOException $e){

    echo "Error: " . $e->getMessage();

}

?>