<?php

$errores = "";
$enviado = "";

if (isset($_POST["submit"])) {

    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    if (!empty($nombre)){  //Com !empty si hay datos ejecuta el codigo

        $nombre = trim($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    } 
    else {
        $errores .= "Por favor ingresa un nombre <br>";
    }

    if (!empty($correo)) {

        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL); //Limpia la caja del correo de espacios y caracteres especiales
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {   // Si no se valida el correo

            $errores .= "Por favor ingresa un correo valido <br>";
        }
    }
    else {                     //Si no hay ingresado ningun correo
        $errores .= "Por favor ingresa un correo <br>";

    }

    if (!empty($mensaje)) {

        $mensaje = htmlspecialchars($mensaje);
        $mensaje = trim($mensaje);
        $mensaje = stripslashes($mensaje);
    }
    else {
        $errores .= "Por favor ingresa el mensaje";
    }

    if (!$errores) {

        $enviar_a = "ponaquitucorreo@gmail.com";
        $asunto = "Correo enviado desde $correo";
        $mensaje_preparado = "De: $nombre \n";
        $mensaje_preparado .= "Mensaje: " .$mensaje;

        mail ($enviar_a, $asunto, $mensaje_preparado);  //Con esta orden se envia el correo. En localhost no funciona

        $enviado ="true";    // Si se realiza el envio, sale el mensaje indicado en indexview
    }
}

require "indexview.php";



?>