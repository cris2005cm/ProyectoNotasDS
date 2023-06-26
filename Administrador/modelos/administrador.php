<?php
include_once('../../Conexion.php');

class Administrador extends conexion
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }

    // Registrar usuarios
    public function addadmi($Nombreuso,$Apellidouso,$Usuario, $Passwoord,$Perfil,$Estado)
    {
        // Crear sentencia SQL
        $statement = $this ->db->prepare("INSERT INTO usuarios(Nombreusu,Apellidousu,Usuario,Passwoord,Perfil,Estado)
        VALUES(:Nombreusu,:Apellidousu,:Usuario,:Passwoord,:Perfil,:Estado)");
        $statement->bindParam(':Nombreusu',$Nombreuso);
        $statement->bindParam(':Apellidousu',$Apellidouso);
        $statement->bindParam(':Usuario',$Usuario);
        $statement->bindParam(':Passwoord',$Passwoord);
        $statement->bindParam(':Perfil',$Perfil);
        $statement->bindParam(':Estado',$Estado);
        
        if ($statement->execute()) {
            echo "Usuario registrado";
            header('Location: ../pages/index.php');
        } else {
            echo "Usuario no registrado";
            header('Location: ../pages/agregar.php');
        }
    }

    // Funcion para consultar todos los usuarios administradores
    public function getadmin()
    {
        $resultset=[];
        $sql = "SELECT * FROM usuarios WHERE Perfil='Administrador'";
        $result = $this->db->query($sql); 
        if ($result->rowCount() > 0) {
            while($row = $result->fetch()) {
                $resultset[] = $row;
            }
        }
        return $resultset;
        

    }

    // Funcion para consultar usuario segun su ID
    public function getidad($id)
    {
        
        $row = null;
        $statement = $this->db->prepare("SELECT * FROM usuarios WHERE id_usuario = :id" );
        $statement->bindParam(':id', $id);
        $statement->execute();
       $result = $statement->fetch(PDO::FETCH_ASSOC);
        
        return $row;
    }

    // Actualizar los datos del usuario
    public function updatead($Id,$Nombreuso,$Apellidouso,$Usuario, $Passwoord,$Estado)
    {
        $statement = $this->db->prepare("INSERT INTO usuarios(Nombreusu,Apellidousu,Usuario,Passwoord,Perfil,Estado)
        VALUES(:Nombreusu,:Apellidousu,:Usuario,:Passwoord,:Perfil,:Estado)");
        $statement->bindParam(':Nombreusu',$Nombreuso);
        $statement->bindParam(':Apellidousu',$Apellidouso);
        $statement->bindParam(':Usuario',$Usuario);
        $statement->bindParam(':Passwoord',$Passwoord);
        $statement->bindParam(':Perfil',$Perfil);

        if ($statement->execute()) {
            echo "El usuario se actualizó correctamente";
            header('Location: ../pages/index.php');
        } else {
            header('Location: ../pages/editar.php');
        }
    }

    // Funcion para eliminar un usuario
    public function deletead($id)
    {
        $statement = $this->db->prepare("DELETE FROM usuarios Where id_usuario=:Id ");
        $statement->bindParam(':Id',$Id);

        if ($statement->execute()) {
            echo "Usuario eliminado";
            header('Location: ../pages/index.php');
        } else {
            echo "Error al eliminar el usuario";
            header('Location: ../pages/eliminar.php');
        }
    }
}
?>