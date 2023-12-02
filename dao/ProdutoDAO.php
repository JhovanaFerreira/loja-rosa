<?php

use Application\models\Produto;


class ProdutoDAO {
    private $conn;

    public function __construct() {
        $this->conn = Connection::getConnection();
    }

    public function listarProdutos() {
        $stmt = $this->conn->prepare("SELECT * FROM produtos");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function salvar($produto) {
        $conexao = new Connection();
        $conn = $conexao->getConnection();

        $nome = $produto->getNome();
        $descricao = $produto->getDescricao();
        $preco = $produto->getPreco();
        $imagem = $produto->getImagem();

        $SQL = "INSERT INTO produtos (nome, descricao, preco, imagem) 
                VALUES ('$nome', '$descricao', $preco, '$imagem')";

        if ($conn->query($SQL) === TRUE) {
            return true;
        } else {
            echo "Error: " . $SQL . "<br>" . $conn->error;
            return false;
        }
    }

   
}
?>
