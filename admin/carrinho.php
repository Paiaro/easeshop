<?php
session_start();
require_once "../inc/cabecalho.php";
require "../inc/conecta.php";
require "../inc/funcoes-carrinho.php";


$idUsuario = $_SESSION['id']; 

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id_produto'])) {
    $idProduto = $_POST['id'];
    adicionarProdutoAoCarrinho($conexao, $idProduto, $idUsuario);
    echo "<p>Produto adicionado ao carrinho com sucesso!</p>";
}

require_once "../inc/footer.php";
?>
