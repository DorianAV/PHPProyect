<?php
include("conection.php");
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-Type: application/json');

// Manejar solicitud OPTIONS (preflight)
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    header('HTTP/1.1 200 OK');
    exit();
}

$data = json_decode(file_get_contents('php://input'), true);

$nombre = $data['nombre'];
$precio = $data['precio'];
$descripcion = $data['descripcion'];
$imagen = $data['imagen'];



$sql = "INSERT INTO productos (nombre, precio, descripcion, imagen) VALUES ('$nombre', '$precio','$descripcion','$imagen')";
$res = mysqli_query($con, $sql);
echo json_encode($res);
