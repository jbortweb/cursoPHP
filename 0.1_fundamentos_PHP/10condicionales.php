<?php

$edad = 17;
$nombre = 'Juan';

if ($edad>=18 && $nombre == "Juan") { // Si la edad es mayor o igual a 18 ejecuta este codigo

    echo '<h1>Bienvenido</h1>';
}

if ($edad<18 or $nombre !='Juan'){  // Si la edad es menor ejecuta este codigo

    echo '<h1>O Eres menor de edad o no coincide el nombre</h1>';
}

//  Operadores comparacion
// == Comparar
// < Menor que
// < Mayor que
// <= Menor o igual
// >= Mayor o igual
// != Diferente
// ! Negacion

// Operadores logicos
// && Evalua que se cumplan las condiciones
// ||, or  Evaua que se cumpla al menos una condicion
// xor Evalua que se cumpla una y solo una condicion

?>