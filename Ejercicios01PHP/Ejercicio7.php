
<!-- . Crea y muestra un array con los números pares entre 1 y 100. -->

<?php
    //creamos un bucle para rellenar un array solo de los numeros pares del 1 al 100
 for($i=2;$i<=100;$i+=2){
    $numerospares[]=$i;
 }
    // Imprime el array de números pares
    echo "Números pares del 1 al 100:<br>";
    echo "<pre>";
    print_r($numerospares);
    echo "</pre>";
?>

