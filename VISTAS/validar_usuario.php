<?php
session_start();
$user=$_POST["txtUser"];
$pass=$_POST["txtPass"];

$cone= mysqli_connect("localhost", "root", "", "mis_perris");
$sql="select * from login where User='$user' and Password='$pass'";
$reg= mysqli_query($cone, $sql);

while ($row = mysqli_fetch_array($reg)) {
    $_SESSION["user"]=$user;
    echo 1;
    return;
}
echo 0;

