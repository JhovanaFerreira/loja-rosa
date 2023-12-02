<?php include 'menu.php'; ?>

<link rel="stylesheet" type="text/css" href="css/style.css">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Loja Rosa</title>
    <style>
        body {
            background-color: #ffe6f2;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #ff66b2;
            color: white;
            text-align: center;
            padding: 1em;
        }

        main {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 2em;
        }

        .produto {
            margin-bottom: 2em;
            border: 1px solid #ff66b2;
            padding: 1em;
            border-radius: 5px;
            background-color: white;
            max-width: 300px;
        }

        .produto img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .produto button {
            background-color: #ff66b2;
            color: white;
            padding: 0.5em 1em;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <header>
    <h1>Bem-vindo à Loja Rosa</h1>
    </header>

    <main>
        <?php
        $nomesProdutos = [
            "Blush Shimmer - Bruna Tavares",
            "BT Mallow Fairytale - Bruna Tavares",
            "BT Hydra - Bruna Tavares",
            "Dior Backstage Glow Face Palette",
            "Gloss Fran By - Franciny Ehlke",
            "Gloss labial Fire Kiss - Mari Maria",
            "Dior Backstage Face&Body Foundation",
            "Caneta Delineadora Melu - Ruby Rose",
            "Máscar de cílios Peel Off Melu - Ruby Rose",
            "Gel Para Sobrancelha Melu - Ruby Rose",
            "Gel Modelador Para Sobrancelhas Melu - Ruby Rose",
            "Gloss Minnie Mouse - Bruna Tavares"
        ];

        // Itera sobre a lista de produtos
        foreach ($nomesProdutos as $produto) {
            echo '<div class="produto">';
            echo '<img src="imagens/produtos/' . nomeDaImagem($produto) . '.jpeg" alt="' . $produto . '">';
            echo '<h2>' . $produto . '</h2>';
            echo '<p>' . obterDescricaoProduto($produto) . '</p>';
            echo '<p>Preço: R$ ' . number_format(rand(10, 100), 2, ',', '.') . '</p>';
            echo '<button>Adicionar ao Carrinho</button>';
            echo '</div>';
        }

        function nomeDaImagem($produto)
        {
            return strtolower(str_replace([' ', '&', '.'], '_', $produto));
        }

        function obterDescricaoProduto($produto)
        {
            switch ($produto) {
                case "Blush Shimmer - Bruna Tavares":
                    return "Realce sua beleza com o Blush Shimmer da Bruna Tavares.";
                case "BT Mallow Fairytale - Bruna Tavares":
                    return "Desperte a magia com o BT Mallow Fairytale da Bruna Tavares.";
                default:
                    return "Descrição do produto indisponível.";
            }
        }
        ?>
    </main>
</body>
</html>
