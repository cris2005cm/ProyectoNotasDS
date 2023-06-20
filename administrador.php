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
            header(location:'../page/index.php');
         echo "Usuario Registrado";
        }
        else
        {
        echo"Usuario no registrado";
        header(location:'../page/agregar.php');
        }

        $row=null;
        $statement=$this->db->prepare("SELECT * FROM usuarios WHERE Perfil='Administrador'");
        $statement->execute();
        while($result->$statement->fetch())
        $row[]=$result;
        
    }
    result $row;
    public function getidadd($Id){
        $row=null;
        $statement=$this->db->prepare("SELECT * FROM usuarios WHERE id_usuario =:Id AND Perfil='Administrador'");
        $statement->bindParam(':Id',$Id);
        $statement->execute();
        while($result->$statement->fetch()){
            $row[]=$result;
        }
       
    } 
   

    public function updatead($Id,$Nombreuso,$Apellidouso,$Usuario, $Passwoord,$Estado)
   {
      $statement=$this->bd->prepare("UPDATE usuarios SET Nombreusu=:Nombreusu, Apellidousu=:Apellidousu, Usuario=:Usuariousu,
       Passwoord=:Passwordusu, Estado=:Estadousu WHERE id_usuario=$Id");
       $statement->bindParam('Id',$Id);
       $statement->bindParam(':Nombreuso',$Nombreuso);
       $statement->bindParam(':Apellidouso',$Apellidouso);
       $statement->bindParam(':Usuario',$Usuario);
       $statement->bindParam(':Passwoord',$Passwoord);
       $statement->bindParam(':Estadousu',$Estadousu);
       if($statement->execute())
       {
        echo"usuario actualizado";
        header('Location:../pages/index.php');
       }else
       {
        echo"usuario  no se puede actualizar";
         header('Location:../pages/editor.php');
       }
   } 
   public function deletead($Id)
   {
      $statement=$this->db->prepare("DELETE FROM usuario WHERE id_usuario=:ID");
      $statement->bidParam(':Id',$Id);
      if($statement->execute())
      {
        echo"usuario eliminado"
        header('Location:..pages/eliminar.php');
      }else{
        echo "error no se puede eliminar usurio";
        header('Location:..pages/eliminar.php');
      }

   }
}
?>