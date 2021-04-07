<?php 

$meses= array (
    'Enero','Febrero','Marzo','Abril',
    'Mayo','Junio','Julio','Agosto',
    'Septiembre','Octubre','Noviembre','Diciembre'
);

//count te dice el numero de valores que hay en el array
echo count($meses)."<br>";

//Si se quiere sacar el ultimo valor se pone un -1, pues los valores son doce, pero empiezan por cero
echo $ultimo_mes = count($meses)-1; 

// $meses [$ultimo_mes]; = $meses[11];

?>