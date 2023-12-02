<?php include 'menu.php'; ?>



<h2>Lista de Produtos</h2>

<?php
session_start();

function listarProdutosCarrinho() {
    if (isset($_SESSION['carrinho'])) {
        return $_SESSION['carrinho'];
    }

    return [];
}
?>


<div class="produtos-container">
    <?php foreach ($produtos as $produto): ?>
        <div class="produto-card">
            <img src="imagens/<?= str_replace(' ', '_', $produto['nome']); ?>.jpg" alt="<?= $produto['nome']; ?>" class="produto-imagem">
            <h3><?= $produto['nome']; ?></h3>
            <p><?= $this->obterDescricaoProduto($produto['nome']); ?></p>
            <p>Preço: R$ <?= number_format($produto['preco'], 2, ',', '.'); ?></p>
            <button onclick="comprarProduto(<?= $produto['id']; ?>)">Comprar</button>
        </div>
    <?php endforeach; ?>
</div>

<script>
    function comprarProduto(idProduto) {    }
</script>

<style>
    .produtos-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .produto-card {
        border: 1px solid #ccc;
        padding: 10px;
        width: 250px;
        text-align: center;
    }

    .produto-imagem {
        max-width: 100%;
        height: auto;
    }
</style>
