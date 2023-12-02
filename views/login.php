<?php include 'menu.php'; ?>

<h2>Login</h2>

<form action="?route=login" method="post">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required>

    <button type="submit">Login</button>
</form>
