<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-Type: application/json');
include("conection.php");
$registros=mysqli_query($con,"SELECT codigo FROM ventas ORDER BY id_venta DESC LIMIT 1");
$vec=[];
while ($reg=mysqli_fetch_array($registros))
{
  $vec[]=$reg;
}
$cad=json_encode($vec);
echo $cad
?>