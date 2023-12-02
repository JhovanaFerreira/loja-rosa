<?php
class UsuarioController {
    private $usuarioDAO;

    public function __construct() {
        $this->usuarioDAO = new UsuarioDAO();
    }

    public function index(){
        $usuarios = $this->usuarioDAO->listarUsuarios();
        include 'views/listar_usuarios.php';
    }

    public function cadastrar(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

            $this->usuarioDAO->cadastrarUsuario($nome, $email, $senha);

            header("Location: ?route=lista_usuarios");
            exit;
        }

        include 'views/cadastrar_usuario.php';
    }

    public function login(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $usuario = $this->usuarioDAO->getUsuarioByEmail($email);

            if ($usuario && password_verify($senha, $usuario['senha'])) {
                
                header("Location: ?route=home");
                exit;
            } else {
                echo "Falha na autenticação. Verifique suas credenciais.";
            }
        }

        include 'views/login.php';
    }

    public function logout(){
        session_destroy();
        header("Location: ?route=home");
        exit;
    }

    public function excluir($id){
        $this->usuarioDAO->excluirUsuario($id);
        header("Location: ?route=lista_usuarios");
        exit;
    }

    public function editar($id){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

            $this->usuarioDAO->editarUsuario($id, $nome, $email, $senha);

            header("Location: ?route=lista_usuarios");
            exit;
        }

        $usuario = $this->usuarioDAO->getUsuarioById($id);
        include 'views/editar_usuario.php';
    }
}
?>
