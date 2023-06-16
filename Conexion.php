<?php
class Conexion
{
    protected $db;
    private $driver = "mysql";
    private $host = "localhost";
    private $namedb = "notas2023";
    private $user = "root";
    private $password = "";

    public function __construct()
    {
        try {
            $this->db = new PDO("{$this->driver}:host={$this->host};dbname={$this->namedb}", $this->user, $this->password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            echo "Conexión realizada";

        } catch (PDOException $e) {
            echo "Ha surgido un error: " . $e->getMessage();
        }
    }
}

?>