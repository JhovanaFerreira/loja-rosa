<?php
class UsuarioDAO {
    private $conn;

    public function __construct() {
        $this->conn = Connection::getConnection();
    }

    public function listarUsuarios() {
        $stmt = $this->conn->prepare("SELECT * FROM usuarios");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function cadastrarUsuario($nome, $email, $senha) {
        $stmt = $this->conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();
    }

    public function excluirUsuario($id) {
        $stmt = $this->conn->prepare("DELETE FROM usuarios WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function getUsuarioByEmail($email) {
        $stmt = $this->conn->prepare("SELECT * FROM usuarios WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function getUsuarioById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM usuarios WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function editarUsuario($id, $nome, $email, $senha) {
        $stmt = $this->conn->prepare("UPDATE usuarios SET nome = :nome, email = :email, senha = :senha WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();
    }
    

}
?>
