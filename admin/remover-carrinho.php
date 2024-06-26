<?php
require_once "../inc/cabecalho.php";
require_once "../inc/conecta.php";
require_once "../inc/funcoes-usuarios.php";
require_once "../inc/funcoes-sessao.php";

// Verifica se o ID do produto foi passado via GET
if (isset($_GET['id'])) {
    // Obtém o ID do produto
    $id = $_GET['id'];

    // Verifica se o produto está no carrinho e remove-o
    if (isset($_SESSION['carrinho'][$id])) {
        unset($_SESSION['carrinho'][$id]);
    }
}

header('Location: carrinho.php');
exit;
