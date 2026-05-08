<?php
class Usuario {
    private $conn;
    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function buscarPorEmail ($email) {
        $sql = "SELECT id, nome, email, senha FROM usuarios WHERE email = '$email' LIMIT 1";
        $result = mysqli_query ($this->conn, $sql);
        return mysqli_fecth_assoc($result);

    }
}




?>