<?php
require_once "inc/cabecalho.php";
require "inc/conecta.php";
require "funcoes/funcao-produtos.php";
$listaProdutos = lerProdutos($conexao);
?>

<style>
    .card {
        max-width: 30rem;
    }
</style>

<div class="row my-1 mx-md-n1">
    <?php foreach ($listaProdutos as $produto) { ?>
        <div class="col-md-4 my-1 px-md-1">
            <article class="card shadow-sm h-100">
                <a href="noticia.php?id=<?=$produto['id']?>" class="card-link">
                    <img src="imagens/<?=$produto['imagem']?>" class="card-img-top" alt="">
                </a>
                <div class="card-body">
                    <h3 class="fs-4 card-title"><?=$produto['nome']?></h3>
                    <p class="card-text"><?=$produto['preco']?></p>
                    <a href="comprar.php?id=<?=$produto['id']?>" class="btn btn-primary">Comprar</a>
                </div>
            </article>
        </div>
    <?php } ?>
</div>
