<?php

// $numero = 7;

// function mostrarNumero($numero){  // Para que la funcion tome el valor de la variable local hay que pasarla como parametro

//     echo $numero;
// }   

// mostrarNumero($numero);

function mostrarNumero() {

    $numero = 10;

    return $numero;  //  Si el echo no esta en la funcion, para sacar el valor de una variable local usaremos return
}

echo mostrarNumero();  // Llamando a la funcion y mostrando en la pantalla el resultado de la funcion

