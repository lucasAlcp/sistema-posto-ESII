<?php

$servername = "localhost";
$database = "posto";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function executa($con, $query){

    if (!$con->query($query) === TRUE) {
        return false; 
       } 
    return $con->insert_id;
}
function verifica($con,$query){
    $result = $con->query($query);
    return $result->num_rows;
}
function retornaValor($con, $query){
    $result = $con->query($query);
    return $result->fetch_array(MYSQLI_NUM);
}

function retornaObjetos($con, $query){
    $result = $con->query($query);

    $resultado = array();

    while ($obj = $result->fetch_object()) {
        array_push($resultado,$obj);
    }

    return $resultado;
}
function retornaObjeto($con, $query){
    $result = $con->query($query);
    return $result->fetch_object();
}

?>