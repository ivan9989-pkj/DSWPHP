 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        /*Hoja de estilo creando el estilo del hola mundo*/ 
        body{
            font-family:Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            margin-top:100px;
        }

        .mensaje{
            font-size:24px;
            color:#333;
            background-color: #fff;
            padding: 10px 20px;
            border-radius:5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

    </style>
</head>
<body>
    
<?php 
    // . Realizar el programa “Hola Mundo” pero añadiendo algo de estilo en PHP


        $mensaje="Hola Mundo desde PHP";
        echo "<div class='mensaje'>$mensaje</div>";


?>
    
</body>
</html>


