<?php
require_once "inc/cabecalho.php";
require_once "inc/funcoes-sessao.php";
require_once "inc/funcoes-usuarios.php";
require "inc/conecta.php";

// Verifica se o usuário está logado
verificaAcesso();

$id = $_SESSION['id'];

if (isset($_POST['atualizar'])) {
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    // Criptografando a senha
    $senha = password_hash($senha, PASSWORD_DEFAULT);

    // Atualizando o usuário no banco de dados
    atualizarUsuario($conexao, $id, $nome, $email, $senha);

    // Atualizando as variáveis de sessão
    $_SESSION['nome'] = $nome;

    $mensagem = "Dados atualizados com sucesso!";
}

$usuario = lerUsuario($conexao, $id);
?>

<div class="row">
    <div class="bg-white rounded shadow col-12 my-1 py-4">
        <h2 class="text-center fw-light">Perfil do Usuário</h2>

        <form action="" method="post" id="form-perfil" name="form-perfil" class="mx-auto w-50" autocomplete="off">
            <?php if (isset($mensagem)) { ?>
                <p class="my-2 alert alert-success text-center">
                    <?= $mensagem ?>
                </p>
            <?php } ?>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input class="form-control" type="text" id="nome" name="nome" value="<?= $usuario['nome'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail:</label>
                <input class="form-control" type="email" id="email" name="email" value="<?= $usuario['email'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha:</label>
                <input class="form-control" type="password" id="senha" name="senha" required>
            </div>
            <button class="btn btn-primary btn-lg" name="atualizar" type="submit">Atualizar</button>
        </form>
    </div>
</div>

<?php

?>
