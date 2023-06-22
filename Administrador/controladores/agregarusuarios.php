<?php
include_once('../../Conexion.php');
include_once('../../Administrador/modelos/administrador.php');
//crear el objeto
$admin= new Administrador();

$Nombreuso =$_POST['txtnombre'];
$Apellidouso=$_POST['txtapellido'];
$Passwordusu=MD5($_POST['txtcontrasena']);
$Usuario=$_POST['txtusuario'];
$Perfil=$_POST['txtperfil'];
$Estadouso=$_POST['txtestado'];
$admin->getadd($Nombreuso,$Apellidouso,$Usuario,$Passwordusu,$Perfil,$Estadouso);

?>