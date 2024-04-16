<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-Type: application/json');
        $id_prod = $_GET["id_prod"];
        include ("conection.php");

        $query=mysqli_query($con,"SELECT * FROM productos WHERE id_prod = '$id_prod'");
        $vec=[];
        while ($reg=mysqli_fetch_array($query))
        {
          $vec[]=$reg;
        }
        $cad=json_encode($vec);
        echo $cad
    ?>