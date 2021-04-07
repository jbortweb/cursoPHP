<?php

if ($_SERVER['REQUEST_METHOD']=='GET') {  //REQUEST_METHOD es el metodo de envio
    
    echo "Se enviaron por GET";
}

else {

    echo "Se enviaron por POST<br>";
}

// Comprobamos si se ha ejecutado el boton de envio

if (isset($_POST['submit'])){ //Si el formulario se ha seteado es que ha sido enviado
    echo "Se han enviado los datos correctamente<br>";
    print_r($_POST['submit']); //Nos saldra "enviar consulta"
}

?>