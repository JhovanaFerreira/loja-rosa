<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua Loja de Maquiagens</title>
    <link rel="stylesheet" href="caminho/para/seu/estilo.css">
</head>
<body>

<?php
class Menu
{
    private $items;

    public function __construct()
    {
        $this->items = [
            'Home' => '?route=home',
            'Produtos' => '?route=listar_produtos',
            'Usuários' => '?route=lista_usuarios',
    
        ];
    }

    public function render()
    {
        echo '<nav>';
        echo '<ul>';
        foreach ($this->items as $label => $link) {
            echo '<li><a href="' . $link . '">' . $label . '</a></li>';
        }
        echo '</ul>';
        echo '</nav>';
    }
}

$menu = new Menu();
$menu->render();
?>


</body>
</html>
