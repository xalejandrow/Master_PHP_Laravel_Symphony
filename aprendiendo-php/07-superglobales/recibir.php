<?php

echo 'Por método GET</br>';
echo "<h1>".$_GET['nombre']."</h1>";
echo "<h1>".$_GET['apellidos']."</h1>";
var_dump($_GET);

echo '</br>';

echo 'Por método POST</br>';
echo "<h1>".$_POST['nombre']."</h1>";
echo "<h1>".$_POST['apellidos']."</h1>";
var_dump($_POST);

?>