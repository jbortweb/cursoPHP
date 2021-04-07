<?php

/*Operadores Aritmeticos

+ Suma
- Resta
* Multiplica
/ Divide 
% Modulo (Nos da el resto de una division)
--*/

$numero = 10;
$numero2 = 5;

$resultado = $numero + $numero2;

echo $resultado.'<br>';

/*Operadores de asignacion

=
+=
-=, <>
<
>
<=
>=

--*/

$cifra = 10;
$cifra2 = 5;

// $cifra = $cifra + 7; es lo mismo que
$cifra += 7;

echo $cifra.'<br>';

/*Operadores de comparacion

==
===  Tiene que ser igual en valor y tipo de dato.
!=,<>
!==
<
>
<=
>=

--*/

if ($numero == 10){

    echo "es igual a 10 <br>";
}

/*Operadores logicos

and, &&
or, ||
xor

--*/

if ($numero > 5 && $numero < 15){
    echo 'Es un numero entre 5 y 15<br>';
}

/*Operadores Incremento / Decremento

++Sx
Sx++
--Sx
Sx--

--*/

$numero++; //Suma uno a numero

echo $numero.'<br>'; //Muestra en pantalla

echo ++$numero.'<br>'; //Suma uno y muestra en pantalla

/*Operadores de cadenas para concatenar

.
.=
--*/

$texto = 'Cadena de texto';
$texto2 = ' Y otra cadena de texto';

$texto3 = $texto . $texto2; //Concatena las dos variables

echo $texto3.'<br>';

$texto .= ' Y otra cadena de texto'; //Concatena el nuevo valor al valor de la variable
echo $texto;
?>