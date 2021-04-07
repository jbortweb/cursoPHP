<?php 

if(!$_GET){

    header ('location: https://localhost/cursoPHP/formularios/02_0metodo_GET.php');
}

$nombre = $_GET["nombre"];
$sexo = $_GET["sexo"];
$año = $_GET["año"];
$terminos = $_GET["terminos"];

echo "Hola, ".$nombre." eres ".$sexo;

?>