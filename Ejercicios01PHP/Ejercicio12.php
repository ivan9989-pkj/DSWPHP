<!-- El saltamonte.
Desarrollar un programa que recibe una cadena de valores enteros separados por coma
que representa los “saltos". El mismo deberá mostrar el número en la posición actual y
a continuación saltar tantas posiciones como el número indicado, mostrando en esas
posiciones _ (underscore) y volviendo a empezar. En el caso de mostrar un 0, se finaliza.
Por ejemplo, saltos=2,3,4,1,5,3,6,7,8,1,10,0,20 se mostraría:
2,_,_,1,_,3,_,_,_,1,_,0, -->

<?php


     function actividad($cadena){
        //Divide la cadena en un array de valores
        $valores=explode(",",$cadena);
        

        // Inicializar el índice
        $indice = 0;

        // Recorremos los valores
         while ($indice < count($valores)) {
         $salto = $valores[$indice];

      
        // Mostrar el número actual
        echo $salto;

          // Verificar si el salto es 0
          if ($salto == 0) {
            echo ',';
            break; // Terminar si encontramos un 0
        }

        // Incrementar el índice
        $indice++;

        // Realizar el salto y mostrar guiones bajos
        for ($i = 0; $i < $salto; $i++) {
            echo ',_';
            $indice++;
        }

        // Agregar una coma después de cada salto
        echo ',';
        }
     }

     // 
     $cadena = '2,3,4,1,5,3,6,7,8,1,10,0,20';
     actividad($cadena)
?>


