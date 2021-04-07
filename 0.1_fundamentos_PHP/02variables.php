<?php 

// String: cadena de texto entre comillas

$nombre ="Jbortweb";

// Integer: numeros enteros

$edad = 45;

// Double: numeros decimales

$peso= 85.4;

// Bolean: Verdadero o falso (true/false)

$verdadero= false;

// Array: Arreglo o matriz
// Object: Objeto
// Class: Clase
// Null: Cuando a una variable no se le ha asignado ningun valor


echo "Hola, $nombre";  // Comillas dobles leen variables
echo ' Hola, $nombre';  // Comillas simples leen string
echo ' Hola' . $nombre; // Comillas simples concatenan con variable

echo gettype($nombre);  //indica el tipo de dato

?>