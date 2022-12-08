<?php
 $id= $_POST['idPueblo'];
 $NOMBRE=$_POST['idNombrePM'];
 $ESTADO=$_POST['idEstadoPM'];
 $AÑO=$_POST['idAñoPM'];
 $HABITANTES=$_POST['idHabitantesPM'];
 $ZONA=$_POST['idZonaTuristicaPM'];
 $CULTURA=$_POST['idCulturaPM'];
 $LEYENDA=$_POST['idLeyendasPM'];
 $COSTUMBRE=$_POST['idCostumbresPM'];


$servidor= "localhost";
$basedatos = "pueblom";
$usuario = "root";
$password ="";

$con = mysqli_connect($servidor, $usuario, $password, $basedatos) or die ("No se pudo conectar");

$consulta = " UPDATE pueblo SET Nombre ='$NOMBRE', Estado = '$ESTADO', Año ='$AÑO', Habitantes = $HABITANTES, Zona = '$ZONA', Culturas ='$CULTURA', Leyenda = '$LEYENDA', Costumbre = '$COSTUMBRE') WHERE ID='$id'";
$registros = mysqli_query($con,$consulta) or die("problemas en el select");

if($registros){
    header("Location:Formulacio.html");
}
else{
    echo "arregla tu mamada";
}
?>