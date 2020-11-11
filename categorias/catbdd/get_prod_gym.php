<?php

include('conex.php');
$response = new stdClass();

$datos = array();
$i=0;

$sql = "SELECT * FROM gym WHERE esDtado=1";
$result = mysqli_query($conex,$sql);

while($row = mysqli_fetch_array($result)){
    $obj = new stdClass();
    $obj->nombpro = $row['nombpro'];
    $obj->descrip = $row['descrip'];
    $obj->precio = $row['precio'];
    $obj->rutimg = $row['rutimg'];

    $datos[$i]= $obj;
    $i++;
}

$response -> datos = $datos;

mysqli_close($conex);
header('Content-Type: application/json');
echo json_encode($response);    

?>