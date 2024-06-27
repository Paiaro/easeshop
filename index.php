<?php 
require_once "inc/cabecalho.php"; 
?>
<link rel="stylesheet" href="css/estilo-index.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Container principal da página -->
<div class="container">
    <!-- Carrossel principal -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imagens/download.gif" class="d-block w-100" alt="Primeiro Slide">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="imagens/fundo-banner.png" class="d-block w-100" alt="Segundo Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Ofertas imperdíveis</h1>
                    <p>Descontos incríveis em produtos selecionados</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="imagens/download (1).gif" class="d-block w-100" alt="Terceiro Slide">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
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
