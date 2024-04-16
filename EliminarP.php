<?php
// Incluimos el archivo de conexión a la base de datos
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-Type: application/json');
include("conection.php");
mysqli_query($con,"delete from productos where id_prod=$_GET[id_prod]");

echo json_encode($response);
?>
