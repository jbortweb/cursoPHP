<?php session_start();

if (isset($_SESSION['usuario'])) {
    header('Location: contenido.php'); //Si la sesion esta loeada se le envia al contenido
}
else {

    header('Location: registrate.php');
}

?>