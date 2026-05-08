<?php 

$host = "localhost";
$user = "root";
$password = "";
$database = "aula_php";

$conn = mysqli_connect($host, $user, $password, $database);

if(!$conn) {
    die("Erro de conexão");
}

?>