<?php

/*
    TIPOS DE DATOS
    Entero (int/integer) = 99
    Coma flotante / decimales (float / double) = 3.45
    Cadenas (string) = "Hola esto es un string"
    Booleano (bool) = true false
    null
    Array (Collección de datos)
    Objetos
*/

$numero = 100;
$decimal = 27.9;
$texto = "Esto es un texto";
$verdadero = true;
$nula = null;

echo "La variable numero es de tipo: ".gettype($numero);
echo "<br>";
echo gettype($decimal);
echo "<br>";
echo gettype($texto);
echo "<br>";
echo gettype($verdadero);
echo "<br>";
echo gettype($nula);
echo "<br>";


// Debug
$mi_nombre = "Pepe Pepito";
var_dump($mi_nombre);
echo "<br>";
$mi_nombreA[] = "Pepe Pepito";
$mi_nombreA[] = "Pepe Pepito";
var_dump($mi_nombreA);

/* Las variables no pueden empezar con números, 
no pueden contener caracteres especiales en su nombre */


$textoEspecial = 'Soy un texto $texto';
echo $textoEspecial."<br>";
//Mostrar datos con comillas dobles, imprime el valor de la variable
echo "La variable numero vale: $numero   ".$numero."<br>";
// Mostrar datos con comillas simples, no imprime el valor de la variable, si no el nombre
echo 'La variable $numero vale: '.$numero;
//Esto es un para un salto de línea en consola \n 
echo "texto1 \n texto 2"."<br>";

//Para poner caracteres especiales tipo comillas
echo "Esto es una comilla \"";




?>