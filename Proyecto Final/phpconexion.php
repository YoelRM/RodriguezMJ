<?php
$servidor = "localhost";
$basedatos = "supermercado";
$usuario = "root";
$password "";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die ("No se pudo conectar con el local host");
$consulta = "SELECT * from articulos";
$registros = mysqli_quer($con,$consulta) or die ("problemas con el servidor");

while ($result = mysqli_Fetch_array($registros,MYSQLI_ASSOC)){
    printf($result['nombre'],' ', $result['apPaterno'],'<br>');
}
mysqli_close($con);
$result = mysqli_fetch_all($registros);

echo json_encode($result);

?>

