
<?php

require "models/Aluno.php";

class AlunoController {

 private $conn;

 public function __construct($conn) {
        $this->conn = $conn;
 }

 public function listarAlunos() {
   $model = new Aluno($this->conn);
   $alunos = $model->listarAlunos();
   require "views/list.php";
 }

 public function create() {
    require "views/create.php";
 }

 public function edit() {
  $model = new Aluno($this->conn);
  $id = $_GET['id'];
  $aluno = $model->procurar($id);
  require "views/edit.php";
 }

 public function delete() {
   $id = $_GET["id"];
   $model = new Aluno($this->conn);
   $model->delete($id);

   header("Location: index.php");
 }

 public function store() {
    $model = new Aluno($this->conn);
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
    $model->create($nome, $email, $idade);

    header("Location: index.php");
 }

 public function atualizar() {
  $id = $_POST['id'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $idade = $_POST['idade'];
  $model = new Aluno($this->conn);
  $model->atualizar($id, $nome, $email, $idade);
  header("Location: index.php");
 }

}
?>