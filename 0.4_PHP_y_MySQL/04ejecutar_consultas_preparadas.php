<?php



try {

    $conexion = new PDO('mysql:host=localhost;dbname=prueba_consola', 'root', '');
    

    // $statement = $conexion->prepare('SELECT * FROM usuarios');  //Preparamos la consulta con un valor temporal (id=:id) para identificarlo

    // $statement->execute();
    
    // $resultados = $statement->fetchAll();

    // // echo "<pre>";
    // // print_r($resultados);
    // // echo "</pre>";

    // foreach ($resultados as $usuario){

    //     echo $usuario['nombre'].' - '.$usuario['email'].'<br>';
    // }

    $statement = $conexion->prepare('INSERT INTO usuarios VALUES(null,"Joan")');
    $statement->execute();

}catch(PDOException $e){

    echo "Error: " . $e->getMessage();

}

?>
