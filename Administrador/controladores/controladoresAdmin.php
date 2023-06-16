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
        
    }
    public function getidadd($Id){

    } 
    public function updatead($Id,$Nombreuso,$Apellidouso,$Usuario, $Passwoord,$Estado)
   {

   } 
   public function deletead($Id){
   
   }
}
?>