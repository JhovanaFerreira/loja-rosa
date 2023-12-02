<?php
require_once 'core/App.php';
require_once 'dao/Connection.php';
require_once 'dao/ProdutoDAO.php';
require_once 'dao/UsuarioDAO.php';
require_once 'models/Produto.php';
require_once 'models/Usuario.php';
require_once 'controllers/ProdutoController.php';
require_once 'controllers/UsuarioController.php';


// Autoloader
spl_autoload_register(function ($class_name) {
    // Converte o namespace para o caminho do arquivo
    $class_path = str_replace('\\', DIRECTORY_SEPARATOR, $class_name) . '.php';
    $class_path = strtolower($class_path);

    // Caminho controllers
    $controller_path = 'controllers' . DIRECTORY_SEPARATOR . $class_path;

    if (file_exists($controller_path)) {
        include_once $controller_path;
    } else {
        echo "Erro ao incluir a classe: $class_name";
    }
});

?>