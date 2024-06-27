
<?php 
require_once "../inc/cabecalho-admin.php"; 
?> 

<!-- Container principal -->
<div class="container mt-5">
  <div class="row justify-content-center"> 
      <div class="col-md-6">
          <div class="card">
              <div class="card-header">
                  <h2>Inserir Novo Produto</h2>
              </div>
              <div class="card-body">
                  <!-- Formulário para inserção de um novo produto -->
                  <form action="../inc/processar_produto.php" method="post" enctype="multipart/form-data"> 
                      <!-- Campo para o nome do produto -->
                      <div class="form-group">
                          <label for="nome">Nome do Produto:</label>
                          <input type="text" class="form-control" id="nome" name="nome" required>
                      </div>
                      <!-- Campo para o preço do produto -->
                      <div class="form-group">
                          <label for="preco">Preço:</label>
                          <input type="number" class="form-control" id="preco" name="preco" step="0.01" required>
                      </div>
                      <!-- Campo para o upload da imagem do produto -->
                      <div class="form-group">
                          <label for="imagem">Imagem do Produto:</label>
                          <input type="file" class="form-control-file" id="imagem" name="imagem" accept="image/*" required>
                      </div>
                      <!-- Botão para inserir o formulário -->
                      <button type="submit" class="btn btn-primary">Inserir Produto</button>
                  </form>
              </div>
             
          </div>
      </div>
  </div>
</div>
