<?php


$meses= array (
    'Enero','Febrero','Marzo','Abril',
    'Mayo','Junio','Julio','Agosto',
    'Septiembre','Octubre','Noviembre','Diciembre'
);

$alex = array( 'telefono' => 666666666, 'edad' => 20, 'pais' => 'Mexico');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <title>Document</title>
</head>
<body>

    <h1>Meses</h1>

        <ul>

        <?php
        
        foreach ($meses as $mes){  //foreach recorre todo el array, independientemente de su numero.

            echo '<li>'.$mes.'</li>';
        }

        foreach($alex as $dato=> $valor){  //Recorre el arreglo asociativo t te da sus valores

            echo '<li>'.$dato.' = '.$valor.'</li>';
        }
        ?>
    
</body>
</html>