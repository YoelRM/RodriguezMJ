<?php
$hostname='localhost';
$database='';
$username='root';
$password='';
$port='3306';

$con = mysqli_connect($hostname,$username,$password,$database) or die("No se pudo conectar al localhost");
$consulta ="select * from Vuelo";
$registro = mysqli_query($con,$consulta) or die("Problemas en el select");

$resultado = mysqli_fetch_all($registro, MYSQLI_ASSOC);

mysqli_close($con);

echo json_encode($resultado);