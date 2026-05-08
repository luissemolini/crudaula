<?php
require "config/database.php";
 class Aluno {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function create($nome, $email, $idade) {
        $sql = "INSERT INTO alunos(nome,email,idade)VALUES('$nome', '$email', '$idade')";
        mysqli_query($this->conn, $sql);
    }

    public function listarAlunos() {
        $sql = "SELECT * FROM alunos";
        return mysqli_query($this->conn, $sql);
    }

    public function delete($id) {
        $sql = "DELETE FROM alunos WHERE id=$id";
        mysqli_query($this->conn, $sql);
    }

    public function procurar($id) {
        $result = mysqli_query($this->conn, "SELECT * FROM alunos WHERE id=$id");
        return mysqli_fetch_assoc($result);
    }

    public function atualizar($id, $nome, $email, $idade) {
        mysqli_query($this->conn, "UPDATE alunos SET nome='$nome',email='$email',idade='$idade' WHERE id=$id");
    }

 }
?>