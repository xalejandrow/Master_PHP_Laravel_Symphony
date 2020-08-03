<?php

// Operadores aritmético

echo "<h1>Operadores aritméticos</h1>";
echo "</br>";
$numero1 = 55;
$numero2 = 33;


echo 'Suma: '.($numero1+$numero2);
echo '</br>';
echo 'Resta: '.($numero1-$numero2);
echo '</br>';
echo 'Multiplicacion: '.($numero1*$numero2).'</br>';
echo 'División: '.($numero1/$numero2).'</br>';
echo 'Módulo o resto: '.($numero1%$numero2).'</br>';

//Operadores de incremento y decremento
$year = 2019;
echo '<h1>'.$year.'</h1></br>';
$year++;
echo '<h1>'.$year.'</h1></br>';
$year--;
echo '<h1>'.$year.'</h1></br>';

// Operadores de asignación
$edad = 55;
echo $edad.'</br>';
echo ($edad+=5).'</br>';
echo ($edad-=5).'</br>';
echo ($edad*=5).'</br>';
echo ($edad/=5).'</br>';

?>