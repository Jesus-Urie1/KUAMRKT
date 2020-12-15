<?php
session_start();
include('conex.php');
$response = new stdClass();
$email = $_SESSION['email'];
$datos = array();
$i=0;

$sql = "SELECT * FROM pedidos WHERE esDtado=3 and email='$email'";
$result = mysqli_query($conex,$sql);

while($row = mysqli_fetch_array($result)){
    $obj = new stdClass();
    $obj->id = $row['id'];
    $obj->producto = $row['producto'];
    $obj->nombre = $row['nombre'];
    $obj->precio = $row['precio'];
    $obj->cantidad = $row['cantidad'];
    $obj->piezas_kilos = $row['piezas_kilos'];
    $obj->fecha = $row['fecha'];

    $datos[$i]= $obj;
    $i++;
}

$response-> datos = $datos;

mysqli_close($conex);
header('Content-Type: application/json');
echo json_encode($response);    

?>