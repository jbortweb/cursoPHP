<?php
/*
Crear cookie con los siguientes parametros
Nombre, valor, tiempo, 60 segundos * 60 minutos * 24 horas * 30 dias,
desde el documento raiz
*/

setcookie("font-size", "30px", time() +60 * 60 *24 *30, "/"); //Para eliminar la cookie tienes que cambiar el simbolo (+) por el simbolo (-)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookie seteada</title>
</head>
<body>
    <h1>Cookie seteada</h1>
</body>
</html>