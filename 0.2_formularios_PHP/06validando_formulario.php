<?php

//Ver todos los filtros de validacion en la documentacion de PHP

$errores = "";

if (isset($_POST['submit'])){

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    if (!empty($nombre)){ // Si nombre no esta vacio ejecuta el codigo

        // $nombre = trim($nombre);  //Trim quita los espacios del principio y del final
        // $nombre = htmlspecialchars($nombre); //Evita inyeccion de codigo transformando etiquetas y simolos especiales en cadena de texto
        // $nombre = stripslashes($nombre);

        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING); //Filtra y sanea toda la cadena de texto

        echo "Tu nombre es: $nombre <br>";
    } else {

        $errores .="Por favor agrega un nombre<br>";
    }

    if (!empty($correo)){

        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);  // Filtra y sanea el contenido del email

        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)){      //Valida que sea un correo si en el type del formulario es un text y no un email

            $errores .= "Por favor ingresa un correo valido";
        }
        echo "Tu correo es: $correo";

    } else {

        $errores .="Por favor agrega un correo";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style> .error{color:red}</style>
</head>
<body>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">

        <input type="text" name="nombre" placeholder="nombre">
        <input type="email" name="correo" placeholder="correo"> <!--Lo correcto es poner email en el type para que te lo valide el navegador

        <?php if(!empty($errores)): ?> <!--Si errores no esta vacio, ejecutal el codigo de la condicional-->
            <div class="error"><?php echo $errores; ?></div>
        <?php endif; ?>  <!--Acaba la condicion-->

        <input type="submit" name="submit">   
</body>
</html>