<?php
include_once('../Conexion.php');
class Admistrador extends Conexion
{
    public function __construct(){
        $this->db = parent::__construct();
    }
    public function  add($Nombreuso,$Apellidouso,$Usuario, $Passwoord,$Perfil,$Estado){

    }
    
    public function getadmin(){
        $statement = $this ->db->prepare("INSERT INTO usuarios(Nombreuso,Apellidouso,Usuario,Passwoord,Perfil,Estado)
        VALUES(:Nombreuso,:Apellidouso,:Usuario,:Passwoord,:'Administrador',:'Activo')");
        $statement->bindParam(':Nombreuso',$Nombreuso);
        $statement->bindParam(':Apellidouso',$Apellidouso);
        $statement->bindParam(':Usuario',$Usuario);
        $statement->bindParam(':Passwoord',$Passwoord);
        $statement->bindParam(':Perfil',$Perfil);
        $statement->bindParam(':Estado',$Estado);
        if($statement>execute()){
            header('location:../page/index.php');
         echo "Usuario Registrado";
        }
        else
        {
        echo"Usuario no registrado";
        header('location:../page/agregar.php');
        }
        
    }
   

    public function getadmin(){
        $row=null;
        $statement=$this->db->prepare("SELECT * FROM usuarios 
        WHERE Perfil='Administrador");
        $statement->execute();
        while($result->$statement->fetch()){
            $row[]=$result;

        }
        result $row;
    } 
    public function getidad($Id){
   $row=null;
   $statement=$this->db->prepare("SELECT * FROM usuario WHERE id_usuario=:Id and Perfil='Administrador")
   $statement->bindParam(':Id',$Id);
   $statement->execute();
   while ($result->statement->fetch(){
    $row[]=$result;
   })
    } 
    
    public function updatead($Id,$Nombreuso,$Apellidouso,$Usuario, $Passwoord,$Estado)
   {
    $statement=$this->db->prepare("UPDATE usuarios SET Nombreuso=:Nombreusu,Apellidouso=:Apellidouso,Usuario=:Usuariouso,Passwoord=:Passwoord,Estadouso=:Estadouso where id_usuario=$Id" ) ;
    $statement->bindParam(':Id',$Id);
    $statement->bindParam(':Nombreuso',$Nombreuso);
    $statement->bindParam(':Apellidouso',$Apellidouso);
    $statement->bindParam(':Usuario',$Usuario);
    $statement->bindParam(':Passwoord',$Passwoord);
    $statement->bindParam(':Estado',$Estado);
    if($statement->execute()){
        header('Location: ../pages/index.php');
        echo("usuario actualizado");
    }
    else{
        header('Location: ../pages/editar.php')
    }
   } 
   public function deletead($Id){
   $statement=$this->db->prepare("DELETE FROM usuarios Where id_usuario=:Id ")
   $statement->bindParam(':Id',$Id);
   if($statement->execute()){
    echo"Usurio eliminado";
    header('Location: ...pages/eliminar.php')
   }else{
    echo"error no se puede eliminar usuario";
    header('Location: ..pages/eliminar.php');
   }
}
}

?>