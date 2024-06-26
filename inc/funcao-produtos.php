<?php

// Função para ler todos os produtos do banco de dados
function lerProdutos($conexao)
{
    // Query SQL para selecionar todos os produtos da tabela 'produtos'
    $sql = "SELECT * FROM produtos";

    // Executa a consulta SQL na conexão fornecida ($conexao)
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    // Retorna todos os resultados da consulta como um array associativo
    return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}

// Função para formatar o preço no formato brasileiro
function formataPreco($preco)
{
    // Formata o preço com 2 casas decimais, separador de milhares ponto (.) e separador decimal vírgula (,)
    return number_format($preco, 2, ',', '.');
}

?>
