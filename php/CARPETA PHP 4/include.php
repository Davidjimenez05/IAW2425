<?php 
include 'config.php';
echo "<h1>Inclusión de constantes y variables</h1>";
echo "Nombre: " . constant("NOMBRE") . "<br>";
echo "Datos: " . constant("DESCRIPCION") . "<br>";
echo "Juego: " . constant("PARTIDO") . "<br>";
echo "Arbitros: " . constant("CONTROLADOR") . "<br>";

?>