<?php
header('Access-Control-Allow-Origin: *');

$con = mysqli_connect('localhost', 'root', '', 'juegoa');
$registros=mysqli_query($con,"select * from productos");
$vec=[];
while ($reg=mysqli_fetch_array($registros))
{
  $vec[]=$reg;
}
$cad=json_encode($vec);
echo $cad
?>
