
<!-- Crea un array de 5 números aleatorios entre 20 y 30, y muestralo. -->

<?php 

// un array llamado $numeroAleatorio
$numeroAleatorio= array();

//
for($i=0;$i<5;$i++){
    $numeroAleatorio=rand(20,30);
    $numeroAleatorios[]=$numeroAleatorio;
}


//Imprime los 5 numeros 
echo "<pre>";
print_r($numeroAleatorios);
echo "</pre>";


?>