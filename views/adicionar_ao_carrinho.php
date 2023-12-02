<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['idProduto'])) {
    $idProduto = $_POST['idProduto'];


    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = [];
    }

    $_SESSION['carrinho'][] = ['id' => $idProduto, 'quantidade' => 1];
    
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
?>
