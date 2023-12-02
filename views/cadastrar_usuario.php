<?php include 'menu.php'; ?>

<h2>Cadastrar Usuário</h2>

<form action="?route=cadastrar_usuario" method="post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required>

    <button type="submit">Cadastrar</button>
</form>
