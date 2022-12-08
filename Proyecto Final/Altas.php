<?php
$NOMBRE=$_POST['idNombrePM'];
$ESTADO=$_POST['idEstadoPM'];
$AÑO=$_POST['idAñoPM'];
$HABITANTES=$_POST['idHabitantesPM'];
$ZONA=$_POST['idZonaTuristicaPM'];
$CULTURA=$_POST['idCulturaPM'];
$LEYENDA=$_POST['idLeyendasPM'];
$COSTUMBRE=$_POST['idCostumbresPM'];

$servidor='localhost';
$basedatos='pueblom';
$usuario='root';
$password='';

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("No se pudo conectar a localhost");
$consulta = "INSERT INTO pueblo (Nombre, Estado, Año, Habitantes, Zona, Culturas, Leyenda, Costumbre) VALUES('$NOMBRE','$ESTADO','$AÑO','$HABITANTES','$ZONA','$CULTURA','$LEYENDA','$COSTUMBRE')";
$registros = mysqli_query($con, $consulta) or die("problemas en el select");

    if($registros){
        header("Location:Index.html");
    }
    else{
        echo "no funciona";
    }
?>