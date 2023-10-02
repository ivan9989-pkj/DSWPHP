<?php
// Realizar un programa en PHP que muestre un valor al azar entre 1 y 6 con las caras de
// un dado. Para ello puedes utilizar la función rand(valor_inicio, valor_final) y realizar la
// captura de seis imágenes de un dado para hacerlo más visual







function dado(){
    $cara=['<img src="./img/dado1.png"/>','<img src="./img/dado2.png"/>','<img src="./img/dado3.png"/>','<img src="./img/dado4.png"/>','<img src="./img/dado5.png"/>','<img src="./img/dado6.png"/>'];

        $dado=array_rand($cara);
        echo $cara[$dado];
}


    dado();

?>