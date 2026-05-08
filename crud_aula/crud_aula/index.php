<?php 

session_start ();

 require "config/database.php";
 require "controllers/AlunoController.php";
 require "controllers/LOginCOntroller.php";
 $controller = new AlunoController($conn);
 $loginController = new LOginController($conn);
 $action = $_GET["action"] ?? 'index';

 if (!isset($_SESSION["usuario"]) && $action !== "mostrarLogin" && $action !== "facaLogin"){
    header ("location: index.php?action=mostrarLogin");

 }

 switch($action) {
    case 'mostrarLogin':
        $loginController->mostrarLogin();
        break;
    case 'facaLogin':
        $loginController->entrar();
        break;
    case 'deslogar':
        $loginController->deslogar();
        break;
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;
    case 'edit':
        $controller->edit();
        break;
    case 'atualizar':
        $controller->atualizar();
        break;
    case 'delete':
        $controller->delete();
        break;
    default:
        $controller->listarAlunos();
 }

?>