<?php include 'menu.php'; ?>

<h2>Cadastrar Produto</h2>

<form action="?route=salvar_produto" method="post" enctype="multipart/form-data">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="descricao">Descrição:</label>
    <textarea id="descricao" name="descricao" required></textarea>

    <label for="preco">Preço:</label>
    <input type="text" id="preco" name="preco" required>

    <label for="imagem">Imagem:</label>
    <input type="file" id="imagem" name="imagem" accept="image/*" required>

    <button type="submit">Cadastrar</button>
</form>
