<?php

//Asociamos un valor a cada parte del array asociandolo con =>
$alex = array('telefono'=>'96547382', 'edad'=> 45, 'apellido'=>'Entrelineas','ciudad'=>'Girona');

echo $alex ['edad']."<br/>";
echo $alex ['telefono']."<br/>";
echo $alex ['apellido']."<br/>";
echo $alex ['ciudad']."<br/>";

//Podemos cambiar el valor 

$alex ['telefono']='111111111';
echo $alex['telefono'];
?>