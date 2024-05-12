<?php
class DbClientes {
    private $conn;

    // Constructor
    public function __construct() {
        // Configuración de la conexión a la base de datos
        $servername = "bbdd_clientes";
        $username = "root";
        $password = "password";
        $database = "clientes";

        // Crear la conexión
        $this->conn = mysqli_connect($servername, $username, $password, $database, 3306);

        // Verificar la conexión
        if (!$this->conn) {
            die("La conexión a la base de datos falló: " . mysqli_connect_error());
        }else{
            echo "conexión realizada con exito a bbdd_clientes<br>";
        }
    }

    // Método para obtener la conexión
    public function getConnection() {
        return $this->conn;
    }
}
?>