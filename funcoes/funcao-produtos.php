<?php

function lerProdutos($conexao)
{
    $sql = "SELECT * FROM produtos";
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}

function formataPreco($preco)
{
    return number_format($preco, 2, ',', '.');
}
?>
