<!-- views/listar_produtos_com_imagem.php -->

<?php include 'menu.php'; ?>
<?php include 'listar_produtos_carrinho.php'; ?>
<button onclick="adicionarAoCarrinho(<?= $produto['id']; ?>)">Adicionar ao Carrinho</button>



<h2>Lista de Produtos</h2>

<div class="produtos-container">
    <?php foreach ($produtos as $produto): ?>
        <div class="produto-card">
            <img src="imagens/<?= str_replace(' ', '_', $produto['nome']); ?>.jpg" alt="<?= $produto['nome']; ?>" class="produto-imagem">
            <h3><?= $produto['nome']; ?></h3>
            <p><?= $produto['descricao']; ?></p>
            <p>Preço: R$ <?= number_format($produto['preco'], 2, ',', '.'); ?></p>
            <button onclick="comprarProduto(<?= $produto['id']; ?>)">Comprar</button>
        </div>
    <?php endforeach; ?>
</div>

<script>
    function comprarProduto(idProduto) {
        
    }
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

<button onclick="adicionarAoCarrinho(<?= $produto['id']; ?>)">Adicionar ao Carrinho</button>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function adicionarAoCarrinho(idProduto) {
        $.ajax({
            type: "POST",
            url: "carrinho.php", 
            data: {
                action: 'adicionar',
                idProduto: idProduto,
                quantidade: 1, 
            },
            success: function (response) {
                alert("Produto adicionado ao carrinho!");
            },
            error: function (error) {
                console.error("Erro ao adicionar produto ao carrinho:", error);
            }
        });
    }
</script>


