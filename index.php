<?php 
// Inclui o arquivo de cabeçalho da página
require_once "inc/cabecalho.php"; 
?>
<!-- Link para a folha de estilo específica desta página -->
<link rel="stylesheet" href="css/estilo-index.css">

<!-- Container principal da página -->
<div class="container">
    <!-- Banner principal -->
    <div class="container-fluid banner">
        <div class="row">
            <div class="col-12">
                <!-- Título e textos do banner principal -->
                <h1>Melhores preços</h1>
                <p>Preços incríveis em todos os seus itens favoritos</p>
                <p>Obtenha mais por menos em marcas selecionadas</p>
            </div>
        </div>
    </div>

    <!-- Seção de banners secundários -->
    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <!-- Primeiro banner secundário -->
            <div class="col-md-6">
                <div class="mainBanner" style="background-image: url('imagens/banner-celular.png');">
                    <h2>Ofertas de férias</h2>
                    <p> Marcas de smartphones selecionadas</p>
                    <div class="btn-group">
                        <!-- Botão para redirecionar para a página de produtos -->
                        <a href="produtos.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <!-- Segundo banner secundário -->
            <div class="col-md-6">
                <div class="mainBanner" style="background-image: url('imagens/banner-fones.png');">
                    <h2>Confira já</h2>
                    <p> Leve o seu som em qualquer lugar</p>
                    <div class="btn-group">
                        <!-- Botão para redirecionar para a página de produtos -->
                        <a href="produtos.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Título da seção de categorias -->
    <h2 class="mt-5">Categorias</h2>

    <!-- Seção de categorias de produtos -->
    <div class="row mt-3 justify-content-center">
        <!-- Categoria de Computadores -->
        <div class="col-md-2">
            <a href="produtos.php" class="categoria-link">
                <div class="categoria">
                    <img src="imagens/categoria-pc.png" alt="Computadores">
                    <h3>Pcs</h3>
                </div>
            </a>
        </div>
        <!-- Categoria de Celulares -->
        <div class="col-md-2">
            <a href="produtos.php" class="categoria-link">
                <div class="categoria">
                    <img src="imagens/categoria-smartphone.png" alt="Celulares">
                    <h3>Celulares</h3>
                </div>
            </a>
        </div>
        <!-- Categoria de Tablets -->
        <div class="col-md-2">
            <a href="produtos.php" class="categoria-link">
                <div class="categoria">
                    <img src="imagens/categoria-tablet.png" alt="Tablets">
                    <h3>Tablets</h3>
                </div>
            </a>
        </div>
        <!-- Categoria de Fones -->
        <div class="col-md-2">
            <a href="produtos.php" class="categoria-link">
                <div class="categoria">
                    <img src="imagens/categoria-headphones.png" alt="Fones">
                    <h3>Fones</h3>
                </div>
            </a>
        </div>
        <!-- Categoria de TVs -->
        <div class="col-md-2">
            <a href="produtos.php" class="categoria-link">
                <div class="categoria">
                    <img src="imagens/categoria-tvs.png" alt="TVs">
                    <h3>TVs</h3>
                </div>
            </a>
        </div>
    </div>
</div>

<?php 
require_once "inc/footer.php"; 
?>
