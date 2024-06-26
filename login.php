<?php 
// Inclui o arquivo que conecta ao banco de dados
require_once "inc/conecta.php";

// Inclui o arquivo de cabeçalho da página
require_once "inc/cabecalho.php";

// Inclui funções relacionadas à sessão
require_once "inc/funcoes-sessao.php";

// Inclui funções relacionadas aos usuários
require_once "inc/funcoes-usuarios.php";

// Verifica se existem mensagens específicas a serem exibidas com base nos parâmetros GET
if (isset($_GET['campos_obrigatorios'])) {
    $mensagem = "preencha e-mail e senha";
} elseif (isset($_GET['dados_incorretos'])) {
    $mensagem = "dados incorretos, tente novamente.";
} elseif (isset($_GET['saiu'])) {
    $mensagem = "você deslogou";
} elseif (isset($_GET['acesso_negado'])) {
    $mensagem = "Você deve logar primeiro!";
}

// Verifica se o formulário de login foi submetido
if (isset($_POST['entrar'])) {
    // Verifica se os campos de e-mail e senha estão vazios
    if (empty($_POST['email']) || empty($_POST['senha'])) {
        header("location: login.php?campos_obrigatorios");
        exit;
    }
    
    // Escapa caracteres especiais para prevenir SQL Injection
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
    
    // Busca o usuário no banco de dados
    $usuario = buscarUsuario($conexao, $email);

    // Verifica se o usuário foi encontrado e se a senha está correta
    if ($usuario !== null && password_verify($senha, $usuario['senha'])) {
        // Inicia a sessão do usuário
        login($usuario['id'], $usuario['nome'], $usuario['tipo']);
        header("location:admin/index.php");
        exit;
    } else {
        // Redireciona para a página de login com mensagem de dados incorretos
        header("location:login.php?dados_incorretos");
        exit;
    }
}
?>

<!-- Estrutura principal da página -->
<div class="row">
    <div class="bg-white rounded shadow col-12 my-1 py-4">
        <!-- Título da página -->
        <h2 class="text-center fw-light">Acesso à área do cliente</h2>

        <!-- Formulário de login -->
        <form action="" method="post" id="form-login" name="form-login" class="mx-auto w-50" autocomplete="off">

            <?php
            // Exibe a mensagem, se houver
            if (isset($mensagem)) {
            ?>
                <p class="my-2 alert alert-warning text-center">
                    <?= $mensagem ?>
                </p>
            <?php } ?>
            
            <!-- Campo de e-mail -->
            <div class="mb-3">
                <label for="email" class="form-label">E-mail:</label>
                <input class="form-control" type="email" id="email" name="email">
            </div>
            
            <!-- Campo de senha -->
            <div class="mb-3">
                <label for="senha" class="form-label">Senha:</label>
                <input class="form-control" type="password" id="senha" name="senha">
            </div>

            <!-- Botão de entrar -->
            <button class="btn btn-primary btn-lg" name="entrar" type="submit">Entrar</button>

        </form>

    </div>
</div>
