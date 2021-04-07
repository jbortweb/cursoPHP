<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario contacto</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" type="text/css"> 
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="wrap">

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="<? if(!$enviado && isset($nombre)) echo $nombre ?>">
        <input type="text" class="form-control" id="nombre" name="correo" placeholder="correo" value="<? if(!$enviado && isset($correo)) echo $correo ?>">

        <textarea name="mensaje" class="form-control" id="mensaje" placeholder="mensaje"><? if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>

        <?php if (!empty($errores)): ?>

            <div class="alert error">

                <?php echo $errores; ?>

            </div>
        
        <?php elseif($enviado): ?>
        

            <div class="alert success">

                <p>Enviado correctamente</p>
                
            </div>
        
        <?php endif ?>

        <input type="submit" name="submit" class="boton" value="Enviar Correo">

    </form>
</div>
    
</body>
</html>