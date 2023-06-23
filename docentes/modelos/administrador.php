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
        $statement = $this ->db->prepare("INSERT INTO docentes(id_docente int(15) not null auto_increment primary key,
        Nombredoc,Apellidodoc,Documentodoc,Correodoc,Materiadoc,Notas )
        VALUES(:Nombredoc,:Apellidodoce,:Documentodoc,:Correodoc,:Materiadoc,:Notas)");
        $statement->bindParam(':Nombredoc',$Nombredoc);
        $statement->bindParam(':Apellidodoce',$Apellidodoce);
        $statement->bindParam(':Documentodoc',$Documentodoc);
        $statement->bindParam(':Correodoc',$Correodoc);
        $statement->bindParam(':Materiadoc',$Materiadoc);
        $statement->bindParam(':Notas',$Notas);
        
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
        
        $row = null;
        $statement = $this->db->prepare("SELECT * FROM usuarios 
        WHERE Perfil='Administrador'");
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
        return $row;
    }

    // Funcion para consultar usuario segun su ID
    public function getidad($id)
    {
        $row = null;
        $statement = $this->db->prepare("SELECT * FROM usuarios WHERE id_usuario = :id AND perfil = 'Administrador'");
        $statement->bindParam(':id', $id);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $row[] = $result;
        }
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
            header('Location: ../pages-copia/index.php');
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
            header('Location: ../pages-copia/index.php');
        } else {
            echo "Error al eliminar el usuario";
            header('Location: ../pages-copia/eliminar.php');
        }
    }
}
?>