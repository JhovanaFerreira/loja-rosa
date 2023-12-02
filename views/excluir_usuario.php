<?php include 'menu.php'; ?>

<h2>Confirmação de Exclusão</h2>

<p>Você tem certeza que deseja excluir o usuário "<?= $usuario['nome']; ?>"?</p>

<form action="?route=excluir_usuario&id=<?= $usuario['id']; ?>" method="post">
    <button type="submit">Sim, Excluir</button>
    <a href="?route=lista_usuarios">Cancelar</a>
</form>
