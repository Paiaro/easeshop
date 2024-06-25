<?php

function adicionarProdutoAoCarrinho($conexao, $idProduto, $idUsuario) {
    $query = "INSERT INTO carrinho (id_usuario, id_produto, quantidade) VALUES (?, ?, 1)";
    $stmt = $conexao->prepare($query);
    $stmt->bind_param("ii", $idUsuario, $idProduto);
    $stmt->execute();
    $stmt->close();
}

?>
