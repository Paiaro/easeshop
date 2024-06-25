<?php
require_once "config.php";

if (isset($_POST['produto_id'])) {
    $produtoId = $_POST['produto_id'];

    // Obter detalhes do produto do banco de dados (ou de onde você os armazena)
    $sql = "SELECT * FROM produtos WHERE id = $produtoId";
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    $produto = mysqli_fetch_assoc($resultado);

    if ($produto) {
        // Adicionar o produto ao carrinho
        if (isset($_SESSION['carrinho'][$produtoId])) {
            $_SESSION['carrinho'][$produtoId]['quantidade']++;
        } else {
            $_SESSION['carrinho'][$produtoId] = array(
                'nome' => $produto['nome'],
                'preco' => $produto['preco'],
                'quantidade' => 1
            );
        }
    }
}

// Redirecionar para a página do carrinho
header('Location: carrinho.php');
exit;
?>