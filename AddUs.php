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
$apellido = $data['apellido'];
$edad = $data['edad'];
$usuario = $data['usuario'];
$contrasena = $data['contrasena'];


$sql = "INSERT INTO usuarios (nombre, apellido, edad, usuario, contrasena) VALUES ('$nombre', '$apellido','$edad', '$usuario', '$contrasena')";
$res = mysqli_query($con, $sql);
echo json_encode($res);
