<?php include 'menu.php'; ?>

<h2>Editar Produto</h2>

<form action="?route=atualizar_produto" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $produto['id']; ?>">

    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" value="<?= $produto['nome']; ?>" required>

    <label for="descricao">Descrição:</label>
    <textarea id="descricao" name="descricao" required><?= $produto['descricao']; ?></textarea>

    <label for="preco">Preço:</label>
    <input type="text" id="preco" name="preco" value="<?= $produto['preco']; ?>" required>

    <label for="imagem">Nova Imagem:</label>
    <input type="file" id="imagem" name="imagem" accept="image/*">

    <button type="submit">Atualizar</button>
</form>
