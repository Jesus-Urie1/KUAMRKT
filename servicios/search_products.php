<?php

include '../categorias/catbdd/conex.php';
$response = new stdClass();
$datos = array();
$i=0;


$search = $_POST['search'];
if(!empty($search)){
    //consulta de busqueda
    $sql = "SELECT * FROM allProducts WHERE nombpro LIKE '$search%'";
    $result = mysqli_query($conex,$sql);

while($row = mysqli_fetch_array($result)){
    $obj = new stdClass();
    $obj->nombpro = $row['nombpro'];
    $obj->precio = $row['precio'];
    $obj->rutimg = $row['rutimg'];

    $datos[$i]= $obj;
    $i++;
}

$response->datos = $datos;

mysqli_close($conex);
header('Content-Type: application/json');
echo json_encode($response);    
}