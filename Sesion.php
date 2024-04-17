<?php
header("Access-Control-Allow-Origin: *");
include("conection.php");
$usuario = $_GET['usuario'];
$password = $_GET['contrasena'];

$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$password'";
$res = mysqli_query($con, $sql);
$response = array();
if (mysqli_num_rows($res) > 0) {
    $response['success'] = true; // Usuario y contraseña correctos
} else {
    $response['success'] = false; // Usuario o contraseña incorrectos
}
mysqli_close($con);
echo json_encode($response);
?>

