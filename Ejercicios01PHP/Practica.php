<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejemplo de recogida de datos sin comprobación (Resultado)</h1>

    <?php

    function recoge($var,$m="")
    {
        $tmp= is_array($m) ? [] : "";
        if (isset($_REQUEST[$var])){
            if(!is_array($_REQUEST[$var])&& !is_array($m)){
            $tmp=trim(htmlspecialchars($_REQUEST[$var]));
            }elseif(is_array($_REQUEST[$var] && is_array($m))){
            $tmp=$_REQUEST[$var];
            array_walk_recursive($tmp,function(&$valor){
                $valor=trim(htmlspecialchars($valor));
            });
        }

    }
    return $tmp;
}

    $nombre=recoge("nombre");
    $edad=recoge("edad");

    print "<p>Su nombre es <strong>$nombre</strong>.</p>\n";
    print "\n";
    print "<p>Su edad es <strong>$edad</strong> años.</p>\n";
    print "\n";

    ?>
    
</body>
</html>