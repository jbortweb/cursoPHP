<?php

    if (isset($_COOKIE["font-size"])) {  //Si la cookie ya existe ejecuta el codigo
    $tamaño = htmlspecialchars($_COOKIE["font-size"]);
    }
    else {
        $tamaño = "15px";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <style> p { font-size: <?php echo $tamaño; ?>;}</style>
</head>
<body>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Assumenda natus porro quia ut a, perspiciatis, voluptas nisi libero, 
quod voluptatem odio eaque! Excepturi blanditiis natus, numquam voluptatem 
accusantium voluptate dolorum?</p>
    
</body>
</html>