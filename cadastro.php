<?php
require "inc/cabecalho.php";
require_once "inc/funcoes-usuarios.php";
require "conecta.php";

if (isset($_POST['cadastrar'])) {
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
    $tipo = 'user'; 


    $senha = password_hash($senha, PASSWORD_DEFAULT);

    inserirUsuario($conexao, $nome, $email, $tipo, $senha);

    header("location: login.php?cadastro_sucesso");
    exit;
}
?>

<div class="row">
    <div class="bg-white rounded shadow col-12 my-1 py-4">
        <h2 class="text-center fw-light">Cadastro de Usuário</h2>

        <form action="" method="post" id="form-cadastro" name="form-cadastro" class="mx-auto w-50" autocomplete="off">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input class="form-control" type="text" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail:</label>
                <input class="form-control" type="email" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha:</label>
                <input class="form-control" type="password" id="senha" name="senha" required>
            </div>
            <button class="btn btn-primary btn-lg" name="cadastrar" type="submit">Cadastrar</button>
        </form>
    </div>
</div>

<?php
require_once "inc/rodape.php";
?>
