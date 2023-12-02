function adicionarAoCarrinho(idProduto) {
   
    fetch('adicionar_ao_carrinho.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'idProduto=' + idProduto,
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Produto adicionado ao carrinho!');
        } else {
            alert('Falha ao adicionar o produto ao carrinho.');
        }
    })
    .catch(error => {
        console.error('Erro ao adicionar ao carrinho:', error);
    });
}