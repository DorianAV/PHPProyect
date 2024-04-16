<?php
include("conection.php");

// Permitir solicitudes desde cualquier origen
header('Access-Control-Allow-Origin: *');

// Permitir ciertos encabezados
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

// Establecer el tipo de contenido de la respuesta como JSON
header('Content-Type: application/json');

// Manejar solicitud OPTIONS (preflight)
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    header('HTTP/1.1 200 OK');
    exit();
}

// Obtener los datos enviados desde el cliente
$data = json_decode(file_get_contents('php://input'), true);

// Verificar si se recibieron los datos esperados
if(isset($data['Total'])) {
    // Obtener el total de la venta
    $total = $data['Total'];
    $codigo = substr(uniqid('', true), 0, 10);
    // Obtener la fecha actual en el formato 'YYYY-MM-DD'
    $fecha = date('Y-m-d');
    
    // Crear la consulta SQL para insertar los datos en la tabla 'ventas'
    $sql = "INSERT INTO ventas (Total, fecha,codigo) VALUES ('$total', '$fecha', '$codigo')";
    
    // Ejecutar la consulta
    $res = mysqli_query($con, $sql);
    
    // Verificar si la consulta se ejecutó correctamente
    if($res) {
        // Si la consulta se ejecutó correctamente, devolver una respuesta de éxito
        echo json_encode(array("message" => "Venta registrada correctamente"));
    } else {
        // Si hubo un error al ejecutar la consulta, devolver un mensaje de error
        echo json_encode(array("error" => "Error al registrar la venta"));
    }
}
?>