<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../../css/aggadmins.css">
<body>

<h1>ACTUALIZAR</h1>
<?php
include_once('../../Conexion.php');
include_once('../modelos/administrador.php');
$Id = $_GET['id'];

$admin = new Administrador();
$row = $admin->getidad($Id);
if($row){


?>

<form action="../../Administrador/controladores/actualizarusuario.php" method="POST">
    <input type="hidden" name="Id" value="<?php echo $Id?>">
  <label for="fname">NOMBRE</label><br>
  <input type="text" placeholder="ingresar nombre" id="Nombreusu'" name="txtnombre"value="<?php echo $row['Nombreusu'] ?>"><br>
  <label for="fname">APELLIDO:</label><br>
  <input type="text" placeholder="ingresar apellido" id="ape" name="txtapellido"value="<?php echo $row ['Apellidousu'] ?>" ><br>
  <label for="lname">USUARIO</label><br>
  <input type="text" placeholder="ingresar usuario" id="usu" name="txtusuario"value="<?php echo $row ['Usuario'] ?>"><br>
  <label for="lname">CONTRASEÑA:</label><br>
  <input type="password" placeholder="ingresar contraseña" id="cont" name="txtcontrasena"value="<?php echo $row ['Passwoord'] ?>"><br><br>
  

  <div class="form-group">
    <p> PERFIL:
      <label for="perfil"></label>
      <select name="txtperfil"value="<?php echo $row ['Perfil']?>">
        <option></option>
        <option value="Administrador">ADMINISTRADOR</option>
        <option value="Docentes">DOCENTES</option>
</select>
</p>
<div class="form-group">
    <p> ESTADO:
      <label for="estado"></label>
      <select name="txtestado"value="<?php echo $row ['Estado']?>">
        <option></option>
        <option value="Activo">ACTIVO</option>
        <option value="Inactivo">INACTIVO</option>
</select>
</p>

<input type="submit" value="ACTUALIZAR" id="boton"  ><br>

<?php } ?>
</form> 


</body>
</html>
