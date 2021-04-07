<?php  //  Metodo POST no muestra valores en el navegador

// $nombre = $_POST["nombre"];
// $sexo = $_POST["sexo"];
// $año = $_POST["año"];
// $terminos = $_POST["terminos"];

// echo "Hola, ".$nombre." eres ".$sexo;  //  Sacamos los valores del formulario


// Si ejecutamos este archivo sin rellenar el formulario nos dirige al formulario o donde le indiquemos

if(!$_POST){

    header ('location: https://localhost/cursoPHP/formularios/02_0metodo_POST.php');
}

$nombre = $_POST["nombre"];
$sexo = $_POST["sexo"];
$año = $_POST["año"];
$terminos = $_POST["terminos"];

echo "Hola, ".$nombre." eres ".$sexo;

?>