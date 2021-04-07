<?php

$meses= array (
    'Enero','Febrero','Marzo','Abril',
    'Mayo','Junio','Julio','Agosto',
    'Septiembre','Octubre','Noviembre','Diciembre'
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Meses del año</title>
</head>
<body>
    <h1>Meses del año</h1>

    <ul>
    
    <?php
    
    //foreach hace un bucle que recorre todo el array $meses y le asigna el nombre que tu quieras, en este caso $mes
    foreach($meses as $mes){
    echo "<li>".$mes."</li>";
    }
    ?>
    </ul>
</body>
</html>