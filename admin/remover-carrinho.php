<?php
require_once "../inc/cabecalho.php";
require_once "../inc/conecta.php";
require_once "../inc/funcoes-usuarios.php";
require_once "../inc/funcoes-sessao.php";




if (isset($_GET['id'])) {
    $id = $_GET['id'];


    if (isset($_SESSION['carrinho'][$id])) {
        unset($_SESSION['carrinho'][$id]);
    }
}


header('Location: carrinho.php');
exit;
