<?php

$texto = '   <>&""  ';
$texto2 = '   Hola, Carlos  ';

// echo htmlspecialchars($texto);  //Cambia los caracteres especiales para evitar inyeccion de codigo


// echo trim($texto2);   //Elimina los espacios del principio y del final


// echo strlen($texto2); //Cuenta los caracteres de la cadena de texto, incluyendo espacios

// echo substr($texto2, 9, 6); //Corta la cadena de texto desde el caracter 9 y retorna los 6 siguientes

// $texto3 = substr($texto2, 9, 6); //Guarda en una variable el valor que retorna.

// echo strtoupper($texto2); //Pone toda la cadena de texto en mayusculas

// echo strtolower($texto2); //Pone toda la cadena de texto en minusculas

 echo strpos($texto2, 'C');  //Nos dice la posicion que se encuentra la letra

?>