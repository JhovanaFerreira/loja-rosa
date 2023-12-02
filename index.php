<?php
require_once 'autoload.php';
App::start();

$route = isset($_GET['route']) ? $_GET['route'] : 'home';

switch ($route) {
    case 'lista_produtos':
        $produtoController = new ProdutoController();
        $produtoController->index();
        break;
    case 'cadastrar_produto':
        $produtoController = new ProdutoController();
        $produtoController->cadastrar();
        break;

    case 'lista_usuarios':
        $usuarioController = new UsuarioController();
        $usuarioController->index();
        break;
    case 'cadastrar_usuario':
        $usuarioController = new UsuarioController();
        $usuarioController->cadastrar();
        break;
    

    case 'login':
        $usuarioController = new UsuarioController();
        $usuarioController->login();
        break;

    default:
        $homeController = new HomeController();
        $homeController->index();
}
?>
<link rel="stylesheet" type="text/css" href="css/style.css">
