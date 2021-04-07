<?php

// $amigo = ['telefono' => 666666666, 'edad' => 25, 'pais' => 'Francia'];

// extract($amigo);  //Convierte los indices del array en variables

// echo $telefono;
// echo $edad;





$semana = ['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo'];

// array_pop($semana); //Elimina el ultimo elemento del array

// foreach ($semana as $dia){

//     echo $dia.'<br>'; //El resultado son todos los dias menos el domingo.
// }

// $ultimo_dia = array_pop($semana); //  Podemos guardar el ultimo elemento como variable

// echo $ultimo_dia;  // Sale el sabado porque el domingo ya lo habiamos quitado




// echo join(' - ', $semana); //  Separa los ielementos del array con el parametro que le indiquemos

// echo '<br>';

// echo join(' <br> ', $semana); //  Podemos poner saltos de linea 


// echo count($semana); //  Cuenta los elementos del array

// sort ($semana);  // Ordena los elementos del array en orden alfabetico
// echo join(' - ',$semana);

// rsort ($semana);  // Ordena los elementos del array en orden alfabetico al reves
// echo join(' - ',$semana);

$semana_reverse = array_reverse($semana);  // Ordena los elementos del array de manera inversa, del ultimo al primero

echo join(' - ',$semana_reverse);