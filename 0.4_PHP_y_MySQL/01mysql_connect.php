<?php


//Modo antiguo, no se utiliza pero aun lo podemos encontrar

$conexion = mysql_connect ("localhost", "root", "") or die("No se pudo conectar a la bd");
mysql_select_db("prueba_consola", $conexion);

$resultados = mysql_query ("SELECT * FROM usuarios");

// $fila = mysql_fetch_object($resultados);

// echo $fila ->nombre;

while( $fila = mysql_fetch_object($resultados)) {

    echo $fila->nombre;
    echo "<br>";
}

?>