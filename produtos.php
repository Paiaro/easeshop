<?php
require_once "inc/conecta.php";
require_once "inc/funcao-produtos.php";
require_once "inc/cabecalho.php";
$listaProdutos = lerProdutos($conexao);
?>

<style>
    .card {
        max-width: 20rem; 
    }
</style>
<link rel="stylesheet" href="css/estilo-index.css">
<div class="row my-1 mx-md-n1">
    <?php foreach ($listaProdutos as $produto) { ?>
        <div class="col-md-2 my-1 px-md-1">
            <article class="card shadow-sm h-100">
                <a href="comprar.php?id=<?=$produto['id']?>" class="card-link">
                    <img src="imagens/<?=$produto['imagem']?>" class="card-img-top" alt="">
                </a>
                <div class="card-body">
                    <h3 class="fs-4 card-title"><?=$produto['nome']?></h3>
                    <p class="card-text">
                        <?php
                        $precoFormatado = number_format($produto['preco'], 2, ',', '.');
                        echo "R$ " . $precoFormatado;
                        ?>
                    </p>
                    <a href="comprar.php?id=<?=$produto['id']?>" class="btn btn-primary">Comprar</a>
                </div>
            </article>
        </div>
    <?php } ?>
</div>

<?php require_once "inc/footer.php"; ?>