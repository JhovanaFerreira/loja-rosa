<?php include 'menu.php'; ?>

<h2>Editar Usuário</h2>

<form action="?route=editar_usuario&id=<?= $usuario['id']; ?>" method="post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" value="<?= $usuario['nome']; ?>" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?= $usuario['email']; ?>" required>

    <label for="senha">Nova Senha:</label>
    <input type="password" id="senha" name="senha">

    <button type="submit">Salvar</button>
</form>
