<!-- 
. Recibes una string de valores separados por coma. Debes eliminar del string los valores
duplicados, mostrando el valor inicial y el valor tras eliminar los duplicados. Por
ejemplo, para la siguiente cadena “1,2,3,2,4,1,5" se mostrará:
1,2,3,2,4,1,5
1,2,3,4,5 -->



<?php
    // creamos el string 
    $txt="1,2,3,2,4,1,5";
    //mostramos el String inicial
    echo "Aqui los valores iniciales: " . $txt ."<br>";

    //convertir la cadena en un array utilizando la coma como separado , explode es para eliminar del array algo
    $valor=explode(",",$txt);

    //Eliminar elmentos duplicados
    $valorUnico=array_unique($valor);

    //Convertir el array nuevamente en una cadena separada por comas , implode sirve para incluir algo a la cadena
    $cadenasinduplicar=implode(",",$valorUnico);



    echo "Cadena sin duplicar: " . $cadenasinduplicar ."<br>";





?>