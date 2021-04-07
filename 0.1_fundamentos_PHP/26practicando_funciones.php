<?php

function calcular_triangulo($base, $altura){

    $resultado = ($base * $altura) / 2;
    return $resultado;
}
$area = calcular_triangulo(10, 10); //area recoge el resultado retornado de la funcion, al pasarle los parametros

echo 'El triangulo tiene un area de ' . $area . ' metros cuadrados';