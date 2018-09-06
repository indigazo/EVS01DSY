<!--SI NO ESTA EN SESION VUELVE A LOGIN!-->
<?php
session_start();
if (isset($_SESSION["user"])) {
    $usuario=$_SESSION["user"];
}else{
    header("location:login.php");
}
?>