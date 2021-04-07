<?php

$meses= array (
    'Enero','Febrero','Marzo','Abril',
    'Mayo','Junio','Julio','Agosto',
    'Septiembre','Octubre','Noviembre','Diciembre'
);

foreach($meses as $mes){
    echo $mes.'<br>';

    if ($mes == 'Mayo'){

        break;      //Esta condicion corta la ejecucion del codigo al encontrar mayo (incluido)
    }
}
    echo '<br>';

//Para no incluir mayo, se pone la condicion antes.

foreach($meses as $mes){   

    if ($mes == 'Mayo'){

        break;      
    }
    echo $mes.'<br>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>Meses de verano</h1>

<?php

foreach($meses as $mes){

    if ($mes != 'Junio' and $mes != 'Julio' and $mes != 'Agosto'){

        continue;   //Salta los que son distintos a los indicados
    }

    echo '<li>'.$mes.'</li>';
}
?>
    
</body>
</html>