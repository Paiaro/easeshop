<?php require_once "inc/cabecalho.php"; ?>
<link rel="stylesheet" href="css/estilo-index.css">


<div class="container">
    <div class="container-fluid banner">
        <div class="row">
            <div class="col-12">
                <h1>Melhores preços</h1>
                <p>Preços incríveis em todos os seus itens favoritos</p>
                <p>Obtenha mais por menos em marcas selecionadas</p>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="mainBanner" style="background-image: url('imagens/banner-celular.png');">
                    <h2>Ofertas de férias</h2>
                    <p> Marcas de smartphones selecionadas</p>
                    <div class="btn-group">
                        <a href="produtos.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mainBanner" style="background-image: url('imagens/banner-fones.png');">
                    <h2>Confira já</h2>
                    <p> Leve o seu som em qualquer lugar</p>
                    <div class="btn-group">
                        <a href="produtos.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h2 class="mt-5">Categorias</h2>

    <div class="row mt-3 justify-content-center">
        <div class="col-md-2">
            <a href="produtos.php" class="categoria-link">
                <div class="categoria">
                    <img src="imagens/categoria-pc.png" alt="Computadores">
                    <h3>Pcs</h3>
                </div>
            </a>
        </div>
        <div class="col-md-2">
            <a href="produtos.php" class="categoria-link">
                <div class="categoria">
                    <img src="imagens/categoria-smartphone.png" alt="Celulares">
                    <h3>Celulares</h3>
                </div>
            </a>
        </div>
        <div class="col-md-2">
            <a href="produtos.php" class="categoria-link">
                <div class="categoria">
                    <img src="imagens/categoria-tablet.png" alt="Tablets">
                    <h3>Tablets</h3>
                </div>
            </a>
        </div>
        <div class="col-md-2">
            <a href="produtos.php" class="categoria-link">
                <div class="categoria">
                    <img src="imagens/categoria-headphones.png" alt="Fones">
                    <h3>Fones</h3>
                </div>
            </a>
        </div>
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

<?php require_once "inc/footer.php"; ?>
