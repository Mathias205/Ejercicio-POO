<?php
require_once 'Computadora.php';

// Crear una nueva computadora
$computadora1 = new Computadora("Dell", "Intel Core i9", 16);
$computadora2 = new Computadora("HP", "AMD Ryzen 5", 8);

// Mostrar las especificaciones de las computadoras
$computadora1->mostrarEspecificaciones();
echo PHP_EOL; // Separador visual
$computadora2->mostrarEspecificaciones ();
?>
