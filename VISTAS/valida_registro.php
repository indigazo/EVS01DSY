<?php
// recuperar los datos desde el formulario
$correo = $_POST["txtMail"];
$rut = $_POST["txtRut"];
$nombre = $_POST["txtName"];
$fec_nac = $_POST["dtDate"];
$telefono = $_POST["numPhone"];
$region = $_POST["cboRegion"];
$ciudad = $_POST["cboCiudad"];
$vivienda = $_POST["cboHouse"];

include_once '../CONTROLADOR/conexion.php';
include_once '../CONTROLADOR/DaoUsuario.php';
include_once '../MODELO/usuario.php';

$usu = new usuario();

$usu->setCorreo($correo);
$usu->setRun($rut);
$usu->setNombre($nombre);
$usu->setFecnac($fec_nac);
$usu->setTelefono($telefono);
$usu->setRegion($region);
$usu->setCiudad($ciudad);
$usu->setVivienda($vivienda);

$dao = new DaoUsuario();
$resp = $dao->Crear($usu);

if ($resp > 0) {echo 1;} else {echo 0;}

