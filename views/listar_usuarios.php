<!-- views/listar_usuarios.php -->

<?php include 'menu.php'; ?>

<h2>Lista de Usuários</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= $usuario['id']; ?></td>
                <td><?= $usuario['nome']; ?></td>
                <td><?= $usuario['email']; ?></td>
                <td>
                    <a href="?route=editar_usuario&id=<?= $usuario['id']; ?>">Editar</a>
                    <a href="?route=excluir_usuario&id=<?= $usuario['id']; ?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
