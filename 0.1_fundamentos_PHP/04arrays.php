<?php

$semana = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');

echo $semana[0]."<br>";

//Añadir elementos al array en una posicion inexistente

$semana[7]="EntreLineas";
echo $semana[7]."<br>";

// El array tambien se puede escribir entre corchetes y llevar diferentes tipos de valor

$arreglo= ["cadenas de texto",34, array('uno',2),true];

echo $semana[0]."<br>";
echo $semana[1]."<br>";
echo $semana[2]."<br>";
echo $semana[3]."<br>";
echo $semana[4]."<br>";
echo $semana[5]."<br>";
echo $semana[6]."<br>";

?>