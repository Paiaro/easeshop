<?php
require_once "inc/conecta.php";
require_once "inc/funcao-produtos.php";
require_once "inc/cabecalho.php";
$listaProdutos = lerProdutos($conexao);
?>

<style>
.card-img-top {
  height: 200px; 
  object-fit: cover;
}
.card-body {
  min-height: 100px;
}
.nome-produto {
  width: 100%;
  height: 40px; 
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  text-align: center;
}
</style>
<link rel="stylesheet" href="css/estilo-index.css">
<div class="row my-1 mx-md-n1">
    <?php foreach ($listaProdutos as $produto) : ?>
        <div class="col-md-2 my-1 px-md-1">
    <article class="card shadow-sm h-100">
        <a href="comprar.php?id=<?= $produto['id'] ?>" class="card-link">
            <img src="imagens/<?= $produto['imagem'] ?>" class="card-img-top" alt="">
        </a>
        <div class="card-body">
            <h3 class="fs-4 card-title nome-produto"><?= $produto['nome'] ?></h3> 
            <p class="card-text">
                R$ <?= number_format($produto['preco'], 2, ',', '.') ?>
            </p>

            <form action="admin/adicionar-carrinho.php" method="post" style="display: inline;">
                <input type="hidden" name="produto_id" value="<?= $produto['id'] ?>">
                <button type="submit" class="btn btn-success">Adicionar ao Carrinho</button>
            </form>
        </div>
    </article>
</div>
    <?php endforeach; ?>
</div>
<?php require_once "inc/footer.php"; ?>