<?php

try {

    $conexion = new PDO('mysql:host=localhost; dbname=paginacion', 'root', '');

} catch (PDOException $e){

    echo "ERROR: ". $e->getMessage();
    die();
}

$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1; //S la pagina tiene algun valor, se lo pasamos como un numero entero, sino le damos el valor de 1.
$postPorPagina = 5;

$inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0; // Si pagina es mayor que 1, pagina se calcula con este metodo, sino se le da el valor de cero.

$articulos = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM Articulos LIMIT $inicio, $postPorPagina"); //Consultamos la base de datos, el numero de articulos total y los articulos que nos indican las variables.

$articulos->execute();
$articulos = $articulos->fetchAll();

if (!$articulos){

    header('Location:index.php');
}

$totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total');
$totalArticulos = $totalArticulos->fetch()['total'];

$numeroPagina = ceil($totalArticulos/$postPorPagina);


require 'index_view.php';

?>