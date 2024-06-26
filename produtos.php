<?php 
require_once "inc/conecta.php";
require_once "inc/funcao-produtos.php";
require_once "inc/cabecalho.php";

// Lê a lista de produtos do banco de dados
$listaProdutos = lerProdutos($conexao);
?>

<style>
/* Define a altura das imagens dos produtos e ajusta a exibição */
.card-img-top {
  height: 200px; 
  object-fit: cover;
}

/* Define a altura mínima do corpo do card */
.card-body {
  min-height: 100px;
}

/* Estiliza o nome do produto dentro do card */
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

<!-- Container principal para a lista de produtos -->
<div class="row my-1 mx-md-n1">
    <!-- Loop através da lista de produtos e exibe cada um como um card -->
    <?php foreach ($listaProdutos as $produto) : ?>
        <div class="col-md-2 my-1 px-md-1">
            <article class="card shadow-sm h-100">
                <a href="comprar.php?id=<?= $produto['id'] ?>" class="card-link">
                    <!-- Imagem do produto -->
                    <img src="imagens/<?= $produto['imagem'] ?>" class="card-img-top" alt="">
                </a>
                <div class="card-body">
                    <!-- Nome do produto -->
                    <h3 class="fs-4 card-title nome-produto"><?= $produto['nome'] ?></h3> 
                    <!-- Preço do produto -->
                    <p class="card-text">
                        R$ <?= number_format($produto['preco'], 2, ',', '.') ?>
                    </p>
                    <!-- Formulário para adicionar o produto ao carrinho -->
                    <form action="admin/adicionar-carrinho.php" method="post" style="display: inline;">
                        <input type="hidden" name="produto_id" value="<?= $produto['id'] ?>">
                        <button type="submit" class="btn btn-success">Adicionar ao Carrinho</button>
                    </form>
                </div>
            </article>
        </div>
    <?php endforeach; ?>
</div>

<?php 
// Inclui o arquivo de rodapé da página
require_once "inc/footer.php"; 
?>
