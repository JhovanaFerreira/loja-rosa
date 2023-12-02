<!-- views/carrinho.php -->

<?php
include 'menu.php';
include 'listar_produtos_carrinho.php';
?>
<?php foreach (listarProdutosCarrinho() as $produto): ?>
    <!-- ... (código do loop) -->
<?php endforeach; ?>

<h2>Carrinho de Compras</h2>

<div class="carrinho-container">
    <?php foreach ($carrinho as $produto): ?>
        <div class="produto-no-carrinho">
            <h3><?= $produto['nome']; ?></h3>
            <p>Quantidade: <?= $produto['quantidade']; ?></p>
            <p>Preço unitário: R$ <?= number_format($produto['preco'], 2, ',', '.'); ?></p>
            <p>Total: R$ <?= number_format($produto['total'], 2, ',', '.'); ?></p>
            <button onclick="removerDoCarrinho(<?= $produto['id']; ?>)">Remover do Carrinho</button>
        </div>
    <?php endforeach; ?>
</div>

<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['idProduto'])) {
        adicionarAoCarrinho($_POST['idProduto']);
        echo json_encode(['success' => true]);
    }
}

function adicionarAoCarrinho($idProduto) {
    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = [];
    }

    if (isset($_SESSION['carrinho'][$idProduto])) {
        $_SESSION['carrinho'][$idProduto]['quantidade']++;
    } else {
        $produto = obterProdutoPorId($idProduto);
        $_SESSION['carrinho'][$idProduto] = [
            'id' => $produto['id'],
            'nome' => $produto['nome'],
            'preco' => $produto['preco'],
            'quantidade' => 1,
            'total' => $produto['preco'],
        ];
    }
}

function obterProdutoPorId($idProduto) {
    $produtos = [
        1 => ['id' => 1, 'nome' => 'Produto 1', 'preco' => 10.00],
        2 => ['id' => 2, 'nome' => 'Produto 2', 'preco' => 15.00],
    ];

    return $produtos[$idProduto];
}
?>

<script>
    function removerDoCarrinho(idProduto) {
        alert("Produto removido do carrinho! Implemente a lógica de remoção aqui.");
    }
</script>

<button onclick="removerDoCarrinho(<?= $produto['id']; ?>)">Remover do Carrinho</button>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function removerDoCarrinho(idProduto) {
        // Faz uma requisição AJAX para remover o produto do carrinho
        $.ajax({
            type: "POST",
            url: "remover_do_carrinho.php", 
            data: {
                idProduto: idProduto,
            },
            success: function (response) {
                alert("Produto removido do carrinho!");
                location.reload();
            },
            error: function (error) {
                console.error("Erro ao remover produto do carrinho:", error);
            }
        });
    }
</script>

<style>
    .carrinho-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .produto-no-carrinho {
        border: 1px solid #ccc;
        padding: 10px;
        width: 250px;
        text-align: center;
    }
</style>
