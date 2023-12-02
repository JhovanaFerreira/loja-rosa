<?php
class ProdutoController {
    private $produtoDAO;

    public function __construct() {
        $this->produtoDAO = new ProdutoDAO();
    }

    public function index(){
        $produtos = $this->produtoDAO->listarProdutos();
        include 'views/listar_produtos.php';
    }

    public function cadastrar(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtenha os dados do formulário
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $preco = $_POST['preco'];
    
            // Upload da imagem
            $nomeImagem = nomeDaImagem($nome) . 'Blush Shimmer - Bruna Tavares.jpeg';
            $caminhoImagem = 'imagens/produtos/' . $nomeImagem;
    
            move_uploaded_file($_FILES['imagem']['tmp_name'], $caminhoImagem);
    
            // salvar esses dados no banco de dados
            $produto = new Produto(null, $nome, $descricao, $preco, $nomeImagem);
            $this->produtoDAO->salvar($produto);
        }
    
        include 'views/cadastrar_produto.php';
    }

    public function editar($id){
        include 'views/editar_produto.php';
    }

    public function excluir($id){
        include 'views/excluir_produto.php';
    }

    public function listarComImagem(){
        $produtos = $this->produtoDAO->listarProdutos();
        include 'views/listar_produtos_com_imagem.php';
    }
    
    private function obterDescricaoProduto($nomeProduto) {
        switch ($nomeProduto) {
            case 'Blush Shimmer - Bruna Tavares':
                return 'Realce sua beleza com o Blush Shimmer da Bruna Tavares.';
            case 'BT Mallow Fairytale - Bruna Tavares':
                return 'Desperte a magia com o BT Mallow Fairytale da Bruna Tavares.';
            case 'BT Hydra - Bruna Tavares':
                return 'Hidratação intensa com o BT Hydra da Bruna Tavares.';
            case 'Dior Backstage Glow Face Palette':
                return 'Ilumine seu rosto com a Dior Backstage Glow Face Palette.';
            case 'Gloss Fran By - Franciny Ehlke':
                return 'Experimente o brilho único do Gloss Fran By da Franciny Ehlke.';
            case 'Gloss labial Fire Kiss - Mari Maria':
                return 'Aposte no glamour do Gloss labial Fire Kiss da Mari Maria.';
            case 'Dior Backstage Face&Body Foundation':
                return 'Cobertura impecável com a Dior Backstage Face&Body Foundation.';
            case 'Caneta Delineadora Melu - Ruby Rose':
                return 'Destaque seus olhos com a precisão da Caneta Delineadora Melu da Ruby Rose.';
            case 'Máscar de cílios Peel Off Melu - Ruby Rose':
                return 'Cílios irresistíveis com a Máscar de cílios Peel Off Melu da Ruby Rose.';
            case 'Gel Para Sobrancelha Melu - Ruby Rose':
                return 'Defina suas sobrancelhas com o Gel Para Sobrancelha Melu da Ruby Rose.';
            case 'Gel Modelador Para Sobrancelhas Melu - Ruby Rose':
                return 'Sobrancelhas perfeitas com o Gel Modelador Para Sobrancelhas Melu da Ruby Rose.';
            case 'Gloss Minnie Mouse - Bruna Tavares':
                return 'Encante-se com o Gloss Minnie Mouse da Bruna Tavares.';
            default:
                return 'Descrição do produto indisponível.';
        }
    }
}
?>
