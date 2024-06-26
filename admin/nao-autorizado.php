<?php 
require_once "../inc/cabecalho.php";
?>

<!-- Artigo principal -->
<article class="p-5 my-4 rounded-3 bg-white shadow">
    <div class="container-fluid py-1">        
        <!-- Mensagem de não autorizado -->
        <h2 class="display-4 bg-warning rounded text-center">Não autorizado!</h2>
        <hr class="my-4">
        <!-- Mensagem personalizada com o nome do usuário -->
        <p class="fs-5 text-center">Desculpe <b><?=$_SESSION['nome']?></b>, mas você <span class="badge bg-danger">não tem permissão </span> para acessar este recurso.</p>
        <hr class="my-4">
        <!-- Botão para voltar à página inicial -->
        <p>
            <a href="index.php" class="btn btn-primary">Voltar para a página inicial</a>
        </p>
    </div>
</article>
