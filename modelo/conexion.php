<?php 

// Establece la conexión a la base de datos
$conexion = new mysqli(
    'localhost',  // Host de la base de datos
    'root',       // Usuario de la base de datos
    '',           // Contraseña del usuario
    'crud_php'    // Nombre de la base de datos
);

// Configura el conjunto de caracteres a UTF-8 para soportar caracteres especiales
$conexion->set_charset('utf8');
?>
