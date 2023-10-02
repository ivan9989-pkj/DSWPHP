
<!-- Declara un array con los valores: 1, 2, ‘antonio’, 200, ‘pepe’. Recorre el array empezando
por el último elemento, ‘pepe’, mostrando cada elemento en una línea separada. -->

<?php


    $array=[1,2,'antonio',200,'pepe'];
    // Obtén la longitud del array
    $long=count($array);
    // Recoremos el array y muestra cada elemento con un línea separada
    for($i=$long-1;$i>=0;$i--){
        echo "$array[$i]" . "<br>";
    }








?>