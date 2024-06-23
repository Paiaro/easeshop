
  <?php require_once "inc/cabecalho.php"; ?> 
  
  <div class="container mt-5">
    <div class="row">
      <?php
      // Dados dos produtos (em um sistema real, você os buscaria do banco de dados)
      $produtos = [
        [ 
          "nome" => "Produto 1",
          "preco" => 29.90,
          "imagem" => "imagens/produto1.jpg" // Caminho para a imagem
        ],
        [ 
          "nome" => "Produto 2",
          "preco" => 59.90,
          "imagem" => "imagens/produto2.jpg" 
        ],
        // ... mais produtos ...
      ];

      // Loop para exibir cada produto em um card
      foreach ($produtos as $produto) {
      ?>
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
      <?php } ?>
    </div> 
  </div>
</body>
</html>