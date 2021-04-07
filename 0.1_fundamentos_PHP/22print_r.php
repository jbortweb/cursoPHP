<?php

$texto = 'Carlos';
$numero = 10;
$numero2 = '5';
$arreglo = ['Carlos', 'Cesar', 'Alex'];
$arreglo_asociativo = ['nombre'=>'Carlos', 'edad'=>20];
$boleano = false;
$boleano2 = true;

print_r ($texto.'<br>');  //Nos indica el valor de la variable

print_r ($arreglo_asociativo);

print_r ('<br>'.$numero.'<br>'); // No te indica si es una cadena o un numero entero

print_r ($numero2.'<br>');

print_r ($boleano2);

print_r ($boleano);  //Tampoco indica si es un valor boleano, si es true indica 1, si es false no indica nada

?>