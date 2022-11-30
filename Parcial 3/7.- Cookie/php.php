<?php
 if(isset($_COOKIE['ultimaVisita'])){
printf("su ultima visita fue: %s",$_COOKIE['ultimaVisita']);

$fechaHoy=date('Y/m/d H:i:s');
setcookie("ultimaVisita",$fechaHoy,time()+(7*24*60*60));
 }
 else{
printf("No se encontro cookie de ultia visita<br>");

$fechaHoy=date('Y/m/d H:i:s');
$siguienteSemana=time()+(7*24*60*60);
$fechaExpira=date('Y/m/d H:i:s',$siguienteSemana)."<br>";

echo '<br>Fecha de creacion de cookie :</br>'.$fechaHoy.'<br>';
echo '<br>Fecha de creacion de cookie :</br>'.$fechaExpira.'<br>';

setcookie("ultimaVisita",$fechaHoy,time()+(7*24*60*60));
 }
?>