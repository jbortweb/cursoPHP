<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="recibe.php" method="" name="" id="" class=""> <!-- La identidad en php la das a traves del atributi name --> 

<input type="text" placeholder="Nombre" name="nombre">
<br>
<label for="hombre">Hombre</label>
<input type="radio" name="sexo" value="hombre" id="hombre">

<label for="mujer">Mujer</label>
<input type="radio" name="sexo" value="mujer" id="mujer">  <!--Tienen el mismo name porque pertenecen a la misma opcion y queremos que solo seleccione una-->
<br>
<select name="año" id="año">

    <option value="2000">2000</option>
    <option value="2001">2001</option>
    <option value="2002">2002</option>

</select>
<br>
<laber for="terminos">Aceptas los terminos?</label> <!--El for y el name del input tienen que coincidir-->
<input type="checkbox" name="terminos" id="terminos" value="ok">
<br>
<input type="submit" value="Enviar">



</form>
    
</body>
</html>