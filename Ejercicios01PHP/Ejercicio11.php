<!-- Dado un array de números, un número es “líder” si su valor es mayor que la suma de
todos los números que se encuentran a su derecha. Escribir un programa que dado un
array de números, devuelva otro array conteniendo los números líderes.
Ejemplos:
• leaders ([1, 2, 3, 4, 0]) ==> return [4]
• leaders ([16, 17, 4, 3, 5, 2]) ==> return {17, 5, 2]
• leaders ([5, 2, -1]) ==> return [5, 2]
• leaders ([0, -1, -29, 3, 2]) ==> return [0, -1, 3, 2] -->







<?php


    function encontrarLideres($array) {
    $n = count($array);
    $lideres = [];

    // Inicializamos el líder como el último elemento
    $lider = $array[$n-1];

    // El último número siempre es líder
    $lideres[] = $lider;

    // Recorremos el array en reversa, desde el penúltimo elemento hacia atrás
    for ($i = $n-2 ; $i >= 0; $i--) {

        if ($array[$i] >= $lider ) {
            // Si encontramos un número mayor que el líder actual,
            // lo marcamos como líder y lo agregamos al resultado
            $lider = $array[$i];
            $lideres[]= $lider;
        }
    }

    // Revertimos el resultado para que esté en el orden original
    return array_reverse($lideres);

    }




    // Ejemplo de uso
    $array = [5, 2, -1];
    $resultado = encontrarLideres($array);

    array_pop($resultado);

    echo "Números líderes en el array: " . implode(", ", $resultado);
?>
