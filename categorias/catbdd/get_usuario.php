<?php
session_start();
include('conex.php');
$response = new stdClass();
$email = $_SESSION['email'];
$datos = array();
$i=0;

$sql = "SELECT * FROM loginkua WHERE email='$email'";
$result = mysqli_query($conex,$sql);

while($row = mysqli_fetch_array($result)){
    $obj = new stdClass();
    $obj->nombres = $row['nombres'];
    $obj->apellidos = $row['apellidos'];
    $obj->telefono = $row['telefono'];
    $obj->email = $row['email'];
    $obj->calle = $row['calle'];
    $obj->nexterior = $row['nexterior'];
    $obj->ninterior = $row['ninterior'];
    $obj->cp = $row['cp'];
    $obj->colonia = $row['colonia'];
    $obj->ecalles = $row['ecalles'];
    $obj->referencias = $row['referencias'];

    $datos[$i]= $obj;
    $i++;
}

$response-> datos = $datos;

mysqli_close($conex);
header('Content-Type: application/json');
echo json_encode($response);    

?>