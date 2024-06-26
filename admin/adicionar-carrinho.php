<?php 

require_once "../inc/cabecalho.php"; 
require_once "../inc/conecta.php"; 
require_once "../inc/funcoes-usuarios.php"; 
require_once "../inc/funcoes-sessao.php"; 

// Verifica se o ID do produto foi enviado via POST
if (isset($_POST['produto_id'])) {
    $produtoId = $_POST['produto_id'];

    // Consulta o produto no banco de dados pelo ID
    $sql = "SELECT * FROM produtos WHERE id = $produtoId";
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    $produto = mysqli_fetch_assoc($resultado);

    // Verifica se o produto foi encontrado
    if ($produto) {
        // Verifica se o produto já está no carrinho
        if (isset($_SESSION['carrinho'][$produtoId])) {
            // Incrementa a quantidade do produto no carrinho
            $_SESSION['carrinho'][$produtoId]['quantidade']++;
        } else {
            // Adiciona o produto ao carrinho com quantidade inicial de 1
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
