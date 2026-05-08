<?php

require "models/Usuario.php";
class LoginController {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
 }

    public function entrar () {
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        
        $model = new Usuario($this->conn);
        $usuario = $model->buscarPorEmail($email);

        if  ($usuario && $senha == $usuario["senha"]){
            $_SESSION["usuario"] = [
                "id" => $usuario["id"],
                "nome"=> $usuario["nome"],
                "email"=> $usuario["email"]
            ] ;
            header ("Location: index.php");
        exit;    
         } else {
         $_SESSION ["erro_login"] = "Email ou senha invalidos";
         header ("Location: index.php?action=mostrarlogin");
}
    }

    function mostrarlogin (){
        require "views/login.php";
    }
}
?>