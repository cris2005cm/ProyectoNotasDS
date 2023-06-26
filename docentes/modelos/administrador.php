<<?php
include_once('../../conexion.php');

class Docente extends conexion
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }

    // Registrar usuarios
    public function adddoc($nombredoc, $apellidodoc, $documento, $correo, $materia, $perfil, $estado)
    {
        $statement = $this->db->prepare("INSERT INTO docente (Nombredoc, Apellidodoc, Documentodoc, Correodoc, Materia)
        VALUES(:Nombredoc, :Apellidodoc, :Documentodoc, :Correodoc, :Materia)");
        $statement->bindParam(':Nombredoc', $nombredoc);
        $statement->bindParam(':Apellidodoc', $apellidodoc);
        $statement->bindParam(':Documentodoc', $documento);
        $statement->bindParam(':Correodoc', $correo);
        $statement->bindParam(':Perfil', $perfil);
        $statement->bindParam(':Materia', $Materia);
        
       
        if ($statement->execute()) {
            echo "Usuario registrado";
            header('Location: ../pages-copia/index.php');
            exit();
        } else {
            echo "Usuario no registrado";
            header('Location: ../pages-copia/agregar.php');
            exit();
        }
    }

    // Resto de los métodos de la clase Docente

    // ...

    // Función para consultar todos los usuarios docentes
    public function getdoc() 
    {
        $row = [];
        $statement = $this->db->prepare("SELECT * FROM docente WHERE perfil = 'docente'");
        $statement->execute();

        while ($result = $statement->fetch()) {
            $row[] = $result;
        }

        return $row;
    }

    // Función para consultar un usuario por su id
    public function getidad($id)
    {
        $row = [];
        $statement = $this->db->prepare("SELECT * FROM docente WHERE id_docente = :id AND perfil = 'docente'");
        $statement->bindParam(':id', $id);
        $statement->execute();

        while ($result = $statement->fetch()) {
            $row[] = $result;
        }

        return $row;
    }

    // Actualizar los datos del usuario
    public function updatead($id, $nombredoc, $apellidodoc, $documento, $correo, $Perfil, $estado)
    {  
        $statement = $this->db->prepare("UPDATE docentes SET nombredoc = :nombredoc, apellidodoc = :apellidodoc, documento = :documento, correo = :correo, perfil = :perfil, estado = :estado WHERE id_docente = :id");
        $statement->bindParam(':id', $id);
        $statement->bindParam(':Nombredoc', $nombredoc);
        $statement->bindParam(':Apellidodoc', $apellidodoc);
        $statement->bindParam(':Documentodoc', $documentodoc);
        $statement->bindParam(':Correo', $correo);
        $statement->bindParam(':Perfil', $perfil);
        $statement->bindParam(':estado', $estado);

        if ($statement->execute()) {
            echo "El usuario se actualizó correctamente";
            header('Location: ../pages-copia/index.php');
            exit();
        } else {
            header('Location: ../pages/editar.php');
            exit();
        }
    }
}
?>