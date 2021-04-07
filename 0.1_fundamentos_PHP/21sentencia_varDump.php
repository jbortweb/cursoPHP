<?php

$texto = 'Carlos';
$numero = 10;
$numero2 = '5';
$arreglo = ['Carlos', 'Cesar', 'Alex'];
$arreglo_asociativo = ['nombre'=>'Carlos', 'edad'=>20];
$boleano = false;


//Nos indica carateristicas de la variable o array

var_dump ($arreglo_asociativo);
var_dump ($texto);
var_dump ($numero2);
var_dump ($boleano);

//Con las etiquetas pre, te lo muestra con formato

echo '<pre>';

var_dump ($arreglo_asociativo);
var_dump ($texto);
var_dump ($numero2);
var_dump ($boleano);

echo '</pre>';

?>