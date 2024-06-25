<?php
require_once "../inc/cabecalho.php"; 
require_once "../inc/conecta.php"; 
require_once "../inc/funcoes-usuarios.php"; 
require_once "../inc/funcoes-sessao.php"; 


if (isset($_POST['produto_id'])) {
    $produtoId = $_POST['produto_id'];

  
    $sql = "SELECT * FROM produtos WHERE id = $produtoId";
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    $produto = mysqli_fetch_assoc($resultado);

    if ($produto) {
        
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


header('Location: carrinho.php');
exit;
?>