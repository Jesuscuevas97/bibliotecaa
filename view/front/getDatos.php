<?php

$conn = new mysqli("localhost","root","","biblioteca");


$id = $conn->real_escape_string($_POST['id']);

$sql = "SELECT id_autor,nombre,apellidoP,apellidoM FROM autor WHERE id_autor= $id";

$resultado = $conn->query($sql);

$rows=$resultado->num_rows;
$pelicula = [];
if($rows>0){
   $pelicula = $resultado->fetch_array();
}
 
echo json_encode($pelicula,JSON_UNESCAPED_UNICODE);

