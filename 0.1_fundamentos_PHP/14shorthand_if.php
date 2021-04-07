<?php

$edad = 18;

$edad = (isset ($edad)) ? $edad : 'El usuario no dijo su edad' ; //isset nos sirve para saber si una variable tiene valor o no, devuelve verdadero o falso

//Si edad es true (en este caso es 18) mantiene el valor, pero si es falso (edad no tiene valor) ejecuta la cadena de texto

echo 'Edad: '. $edad;

?>