<?php
$id=1;
// $id = $_POST['idPueblo'];
$servidor = "localhost";
$basedatos = "pueblom";
$usuario = "root";
$password = "";


$con= mysqli_connect($servidor,$usuario,$password,$basedatos) or die("no se puede conectar");
$sql = "SELECT * FROM `pueblo` WHERE idPueblo=$id; ";

$registros= mysqli_query($con,$sql) or die ("problemas en el select");

$result=mysqli_fetch_array($registros, MYSQLI_ASSOC);
mysqli_close($con);

echo json_encode($result);


// $con = mysqli_connect($servidor, $usuario, $password, $basedatos) or die("No se pudo conectar a localhost");
// $consulta = "SELECT * FROM pueblo WHERE idPueblo = $id";
// $registros = mysqli_query($con, $consulta) or die("problemas en el select");

// $result = mysqli_fetch_array($registros, MYSQLI_ASSOC);
// echo json_encode($result);

//  if($registros){
//      header("Location:Index.html");
//  }
//  else{
//      echo "arregla tu mamada";
//  }

?>