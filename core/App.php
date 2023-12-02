<?php

class App {
    public static function start() {
        session_start();
        spl_autoload_register(function ($class_name) {
            include $class_name . '.php';
        });
    }

    public static function adicionarAoCarrinho($idProduto, $quantidade) {
        session_start();

        if (!isset($_SESSION['carrinho'])) {
            $_SESSION['carrinho'] = array();
        }

        if (isset($_SESSION['carrinho'][$idProduto])) {
            $_SESSION['carrinho'][$idProduto]['quantidade'] += $quantidade;
        } else {
            $_SESSION['carrinho'][$idProduto] = array(
                'id' => $idProduto,
                'quantidade' => $quantidade,
            );
        }
    }

    public static function removerDoCarrinho($idProduto) {
        session_start();

        if (isset($_SESSION['carrinho'][$idProduto])) {
            unset($_SESSION['carrinho'][$idProduto]);
        }
    }

}

?>
