


<?php

/*Realizar un programa en el que se declare una variable de cada tipo de dato; Que se
utilicen las comillas simples y dobles; que se concatenen varias cadenas; que se
concatenen varias cadenas con sus valores correspondientes; que se realice la salida de
una de las cadenas mediante echo y mediante print; que se declare una constante
(mediante define y const); que se utilice var_dump(); donde se realice una conversión
explícita de tipos; donde haga uso de referencias.
*/


// Declaración de variables de diferentes tipos de datos
$entero = 42;
$flotante = 3.14;
$cadenaDoble = "Esto es una cadena con comillas dobles";
$cadenaSimple = 'Esto es una cadena con comillas simples';
$booleano = true;
$arreglo = [1, 2, 3];
$objeto = new stdClass();

// Concatenación de cadenas
$nombre = "Juan";
$apellido = "Pérez";
$nombreCompleto = $nombre . " " . $apellido;

// Concatenación de cadenas con valores correspondientes
$edad = 30;
$mensaje = "Mi nombre es $nombre $apellido y tengo $edad años.";

// Salida de cadenas mediante echo y print
echo $nombreCompleto . "<br>";
print($mensaje . "<br>");

// Declaración de una constante
define("PI", 3.14159265359);


echo "El valor de PI es: " . PI . "<br>";

// Uso de var_dump
var_dump($entero);


// Conversión explícita de tipos
$numeroComoTexto = "123";
$numero = (int)$numeroComoTexto; // Convertir a entero
echo "Número como entero: " . $numero . "<br>";

// Uso de referencias
$a = 10;
$b = &$a; // $b es una referencia a $a
$b = 20; // Modificar $b también afecta a $a
echo "Valor de a: " . $a . "<br>";
echo "Valor de b: " . $b . "<br>";
?>






