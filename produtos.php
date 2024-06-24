<?php
require_once "inc/cabecalho.php";
require "inc/conecta.php";

// Verificar se a conexão foi estabelecida
if (!$conexao) {
  die("Erro ao conectar com o banco de dados.");
}

$sql = "SELECT * FROM produtos";
$resultado = mysqli_query($conexao, $sql);

// Verificar se a consulta foi executada corretamente
if (!$resultado) {
  die("Erro ao executar a consulta: " . mysqli_error($conexao));
}

$produtos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

// Verificar se há produtos para exibir
if (!$produtos) {
  echo "<div class='container mt-5'><div class='alert alert-warning'>Nenhum produto encontrado.</div></div>";
  exit;
}
?>

<div class="container mt-5">
  <div class="row">
    <?php foreach ($produtos as $produto) : ?>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="<?php echo $produto["imagem"]; ?>" class="card-img-top" alt="<?php echo $produto["nome"]; ?>">
          <div class="card-body">
            <h5 class="card-title"><?php echo $produto["nome"]; ?></h5>
            <p class="card-text">R$ <?php echo number_format($produto["preco"], 2, ',', '.'); ?></p>
            <a href="#" class="btn btn-primary">Comprar</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
</body>

</html>