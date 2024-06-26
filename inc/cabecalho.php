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

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">EasyShop</a> <!-- Link para a página inicial -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> <!-- Ícone do botão de navegação responsiva -->
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a> <!-- Item da barra de navegação para a página inicial -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin/cadastro.php">Cadastre-se</a> <!-- Item da barra de navegação para cadastro -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a> <!-- Item da barra de navegação para login -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin/carrinho.php">Carrinho</a> <!-- Item da barra de navegação para o carrinho -->
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Produtos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="produtos.php">todos</a> <!-- Links de dropdown para categorias de produtos -->
                        <a class="dropdown-item" href="#">Computadores</a>
                        <a class="dropdown-item" href="#">Tablets</a>
                        <a class="dropdown-item" href="#">Celulares</a>
                        <a class="dropdown-item" href="#">TVs</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button> <!-- Formulário de busca -->
            </form>
        </div>
    </nav>
</body>

</html>
