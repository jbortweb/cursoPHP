<?php

function suma($numero1, $numero2) {

    return $numero1 + $numero2."<br>";
}

// Nos sirve para enlazar con otros documentos.

// include '31_1vista.php'; //  Permite el visionado de la pagina aunque haya un error

// require '31_1vista.php';  //  No permite el visionado de la pagina si hay un error


include_once '31_1vista.php'; //  Solo permite que se ejecute una vez el codigo
include_once '31_1vista.php'; 

require_once '31_1vista.php';
require_once '31_1vista.php';