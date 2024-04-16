<?php

// Intentamos establecer una conexión a la base de datos utilizando la función mysqli_connect
// Los parámetros son: servidor ('localhost'), nombre de usuario ('root'), contraseña (''), y nombre de la base de datos ('peluqueria')
$con = mysqli_connect('localhost', 'root', '2004', 'juegoa');

// Verificamos si la conexión se estableció con éxito
if (!$con) {
    echo "Error de Conexion"; // Si la conexión falla, mostramos un mensaje de error
    exit; // Salimos del script
}
// Si la conexión se establece con éxito, la variable $con contendrá la conexión a la base de datos.
// Puedes utilizar esta conexión para realizar consultas a la base de datos.
?>
