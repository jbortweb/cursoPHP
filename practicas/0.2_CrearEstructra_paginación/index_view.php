<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Paginación</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet" type="text/css"> 
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    
<div class="contenedor">

    <h1>Articulos</h1>

    <section class="articulos">
       
        <ul>
            <?php foreach ($articulos as $articulo) : ?>

                <li><?php echo $articulo['id'].'- '. $articulo['articulo']; ?></li>
            
            <?php endforeach; ?>
        </ul>

    </section>

    <section class="paginacion">

        <ul>

        <!-- Establecemos cuando estara el boton de atras desabilitado. -->
            
            <?php if($pagina == 1):?>

                <li class="disabled">&laquo;</li>

            <?php else: ?>

                <li><a href="?pagina=<?php echo $pagina -1 ?>">&laquo;</a></li>

            <?php endif; ?>

            <?php

            // Ejecutamos un bucle para mostrar las paginas

            for ($i=1; $i<=$numeroPagina; $i++){

                if($pagina == $i){

                    echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
                }

                else{

                    echo "<li><a href='?pagina=$i'>$i</a></li>";
                }
            }

            ?>
            <!-- Establecemos cuando estara el boton izquierdo desabilitado -->

            <?php if($pagina == $numeroPagina):?>

                <li class="disabled">&raquo;</li>

            <?php else: ?>

                <li><a href="?pagina=<?php echo $pagina +1 ?>">&raquo;</a></li>

            <?php endif; ?>

        </ul>
    </section>
</div>
</body>
</html>