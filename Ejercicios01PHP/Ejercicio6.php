
<!-- Realizar un programa que cada vez que se ejecute muestre tu nombre a un tamaño
elegido al azar entre 200% y 700%. -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /*Tamaño de la letra que varia*/ 
        #nombre{
    font-size: <?php  echo rand(200,700)?>%;
    }
    </style>
</head>
<body>
    <!-- El nombre varia cada vez que recargamos la pagina  -->
    <h1>Nombre a tamaño aleatorio</h1>
    <!-- nombre es la id para el estilo -->
    <p id="nombre">Iván Santana Quintana</p>
</body>
</html>