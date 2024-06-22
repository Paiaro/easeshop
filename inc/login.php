<?php
require 'conexao.php';

if (isset($_GET['campos_obrigatorios'])) {
    $mensagem = "Preencha e-mail e senha.";
} elseif (isset($_GET['dados_incorretos'])) {
    $mensagem = "Dados incorretos, tente novamente.";
} elseif (isset($_GET['saiu'])) {
    $mensagem = "Você deslogou.";
} elseif (isset($_GET['acesso_negado'])) {
    $mensagem = "Você deve logar primeiro!";
}

if (isset($_POST['entrar'])) {
    if (empty($_POST['email']) || empty($_POST['senha'])) {
        header("Location: ../index.php?campos_obrigatorios");
        exit;
    }

    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    $usuario = buscarUsuario($conexao, $email);

    if ($usuario !== null && password_verify($senha, $usuario['senha'])) {
        login($usuario['id'], $usuario['nome'], $usuario['tipo']);
        header("Location: ../admin/index-admin.php");
        exit;
    } else {
        header("Location: ../index.php?dados_incorretos");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - EasyShop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="bg-white rounded shadow p-4">
                    <h2 class="text-center fw-light">Acesso à área administrativa</h2>
                    <form action="login.php" method="post" id="form-login" name="form-login" class="mt-3" autocomplete="off">
                        <?php if (isset($mensagem)) { ?>
                            <p class="my-2 alert alert-warning text-center">
                                <?= $mensagem ?>
                            </p>
                        <?php } ?>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail:</label>
                            <input class="form-control" type="email" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="form-label">Senha:</label>
                            <input class="form-control" type="password" id="senha" name="senha" required>
                        </div>
                        <button class="btn btn-primary btn-lg btn-block" name="entrar" type="submit">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
