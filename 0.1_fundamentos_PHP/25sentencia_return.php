<?php

function saludo($nombre){

    return "Saludo, $nombre <br>";
}

echo saludo('Carlos');    //Le pasamos el valor a la funcion al llamarla para ejecutarla
echo saludo('José');
echo saludo('Alex');

// function sumar($num1, $num2){

//     $resultado = $num1 + $num2;

//     return $resultado; //Retorna el resultado que puedes guardar en una variable para ser utilizada.
// }

// $resultado = sumar(7, 5);

// echo $resultado;
