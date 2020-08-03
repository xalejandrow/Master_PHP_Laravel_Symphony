<?php

// Constantes
// Es un contenedor de información que no puede variar

define('nombre','Alew');
define('web','victorrobles.es');

echo "<h1>".nombre."</h1>"."</br>";
echo "<h1>".web."</h1>";
echo "<p> A las constantes no se puede modificar su valor</p>";

// Constantes predefinidas

echo PHP_OS;
echo "</br>";
echo PHP_VERSION;
echo "</br>";
echo PHP_EXTENSION_DIR;
echo "</br>";
echo __LINE__;
echo "</br>";
echo __FILE__;
echo "</br>";

function holaMundo(){
    echo "Esta linea está dentro de la función: ".__FUNCTION__;
}
holaMundo();


?>