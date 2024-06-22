<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyShop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

    <style>
        .banner {
            background-image: url('imagens/banner-fundo.jpg');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .mainBanner {
            background-size: cover;
            background-position: center;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            position: relative;
        }

        .mainBanner .btn-group {
            position: absolute;
            bottom: 20px;
            left: 20px;
        }

        .categoria {
            background-color: #f8f9fa;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 20px;
            text-align: center;
        }

        .categoria img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .container {
            text-align: center;
        }

        .banner,
        .mainBanner {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .footer {
            background-color: #343a40;
            color: white;
            padding: 40px 0;
        }

        .footer a {
            color: #f8f9fa;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">EasyShop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cadastre-se</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Produtos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Computadores</a>
                        <a class="dropdown-item" href="#">Tablets</a>
                        <a class="dropdown-item" href="#">Celulares</a>
                        <a class="dropdown-item" href="#">TVs</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </nav>
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
                    <div class="mainBanner" style="background-image: url('imagens/celular-banner.jpg');">
                        <h2>Ofertas de férias</h2>
                        <p> Marcas de smartphones selecionadas</p>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">Comprar</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mainBanner" style="background-image: url('imagens/fones-banner.jpg');">
                        <h2>Comfira já</h2>
                        <p> Leve o seu som em qualquer lugar</p>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="mt-5">Categorias</h2>

        <div class="row mt-3 justify-content-center">
            <div class="col-md-2">
                <div class="categoria">
                    <img src="imagens/pc-categoria.jpg" alt="Computadores">
                    <h3>Pcs</h3>
                </div>
            </div>
            <div class="col-md-2">
                <div class="categoria">
                    <img src="imagens/smartphone-categoria.jpg" alt="Celulares">
                    <h3>Celulares</h3>
                </div>
            </div>
            <div class="col-md-2">
                <div class="categoria">
                    <img src="imagens/tablet-categoria.jpg" alt="Tablets">
                    <h3>Tablets</h3>
                </div>
            </div>
            <div class="col-md-2">
                <div class="categoria">
                    <img src="imagens/headphones-categoria.jpg" alt="Fones">
                    <h3>Fones</h3>
                </div>
            </div>
            <div class="col-md-2">
                <div class="categoria">
                    <img src="imagens/tvs-categoria.jpg" alt="TVs">
                    <h3>TVs</h3>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Sobre Nós</h5>
                    <p>EasyShop é a sua loja online de confiança para todos os produtos eletrônicos. Oferecemos as melhores ofertas e serviços.</p>
                </div>
                <div class="col-md-4">
                    <h5>Links Úteis</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Início</a></li>
                        <li><a href="#">Cadastre-se</a></li>
                        <li><a href="#">Produtos</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contato</h5>
                    <ul class="list-unstyled">
                        <li>Email: contato@easyshop.com</li>
                        <li>Telefone: (11) 1234-5678</li>
                        <li>Endereço: Rua Exemplo, 123, São Paulo - SP</li>
                    </ul>
                </div>
            </div>
            <div class="text-center mt-3">
                <p>&copy; 2024 EasyShop. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
</body>

</html>