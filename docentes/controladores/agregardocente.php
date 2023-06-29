<?php
include_once('../../Conexion.php');
include_once('../../docentes/modelos/docente.php');
//crear el objeto
$admin= new Administrador();

$Nombreuso =$_POST['txtnombre'];
$Apellidouso=$_POST['txtapellido'];
$correo=$_POST['txtcorreo'];
$documento=$_POST['txtdocumento'];
$materia=$_POST['txtmateria'];
$notas=$_POST['txtnotas'];

$admin->  addadmi($Nombreuso, $Apellidouso, $documento, $correo, $materia, $notas);



?>