<?php

$meses= array (
    'Enero','Febrero','Marzo','Abril',
    'Mayo','Junio','Julio','Agosto',
    'Septiembre','Octubre','Noviembre','Diciembre'
);

for ($i = 0; $i < count($meses); $i++) { //count($variable) devuelve el numero total de elementos del array

    echo '<li>'.$meses[$i].'</li>';
}

echo '<br>';

// Con While hay que asignarle un valor a la variable para que comience

$i = 0;

while ($i < count($meses)){

    echo '<li>'.$meses[$i].'</li>';

    $i++;

}

?>