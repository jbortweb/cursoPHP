<?php

$meses= array (
    'Enero','Febrero','Marzo','Abril',
    'Mayo','Junio','Julio','Agosto',
    'Septiembre','Octubre','Noviembre','Diciembre'
);

//Ordenar arreglo en orden alfabetico con la funcion sort
sort($meses);

//Ordenar arreglo en orden alfabetico al reves, con la funcion rsort
rsort($meses);

//Ordenar numeros, tambien con sort, al reves con rsort.

$numero= array(1, 34, 22, 5, 87, 56, 98, 23);
sort ($numero);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MOrdenar arreglos</title>
</head>
<body>
    <h1>Ordenar meses y numeros</h1>

    <ul>
    
    <?php
    
    //foreach hace un bucle que recorre todo el array $meses y le asigna el nombre que tu quieras, en este caso $mes
    foreach($meses as $mes){
    echo '<li>'.$mes."</li>";
    }

    echo ('<br>');

    foreach($numero as $num){
        echo '<li>'.$num.'</li>';
    }
    ?>
    </ul>
</body>
</html>