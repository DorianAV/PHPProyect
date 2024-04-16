<?php
// Incluir el archivo de conexión a la base de datos
include("conection.php");

// Establecer encabezados CORS para permitir el acceso desde cualquier origen
header("Access-Control-Allow-Origin: *");

// Establecer encabezados CORS para permitir cualquier tipo de encabezado
header("Access-Control-Allow-Headers: *");

// Obtener el contenido JSON del cuerpo de la solicitud HTTP y decodificarlo
$data = json_decode(file_get_contents('php://input'));

// Extraer los campos del objeto JSON y asignarlos a variables PHP
$id_prod = $data->id_prod;
$nombre = $data->nombre;
$precio = $data->precio;
$descripcion = $data->descripcion;

// Construir la consulta SQL para actualizar un registro en la base de datos
$sql = "UPDATE productos SET nombre='$nombre', precio=$precio, descripcion='$descripcion' WHERE id_prod=$id_prod";

// Ejecutar la consulta SQL en la base de datos
$res = mysqli_query($con, $sql);

// Convertir el resultado de la consulta a formato JSON y devolverlo como respuesta
echo json_encode($res);
