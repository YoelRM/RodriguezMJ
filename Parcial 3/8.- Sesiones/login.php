<?php
session_start();

if ( isset($_SESSION['usuario'])){
    printf("Bienvenido de nuevo" .$_SESSION['usuario']);
} else {
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['numcontrol'] = $_POST['numcontrol'];
 
    printf("Bienvenido %s".$_POST['usuario']);
}

?>