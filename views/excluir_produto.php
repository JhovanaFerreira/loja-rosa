<?php include 'menu.php'; ?>

<h2>Confirmação de Exclusão</h2>

<p>Você tem certeza que deseja excluir o produto "<?= $produto['nome']; ?>"?</p>

<form action="?route=excluir_produto" method="post">
    <input type="hidden" name="id" value="<?= $produto['id']; ?>">
    <button type="submit">Sim, Excluir</button>
    <a href="?route=lista_produtos">Cancelar</a>
</form>
