<?php
require_once "../inc/cabecalho-admin.php";
require_once "../inc/funcoes-usuarios.php";
require_once "../inc/funcoes-sessao.php";

// Verifica se o usuário tem o nível de acesso adequado
verificaNivel();

// Verifica se o formulário foi enviado
if (isset($_POST['inserir'])) {
    // Captura os dados do formulário e aplica htmlspecialchars para segurança
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $tipo = htmlspecialchars($_POST['tipo']);
    
    // Hash da senha usando o algoritmo PASSWORD_DEFAULT do PHP
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    // Chama a função para inserir um novo usuário no banco de dados
    inserirUsuario($conexao, $nome, $email, $tipo, $senha);

    // Redireciona de volta para a página de usuários após a inserção
    header("Location: usuarios.php");
    exit;
}
?>

<div class="row">
    <article class="col-12 bg-white rounded shadow my-1 py-4">

        <h2 class="text-center">
            Inserir novo usuário
        </h2>

        <form autocomplete="off" class="mx-auto w-75" action="" method="post" id="form-inserir" name="form-inserir">

            <div class="mb-3">
                <label class="form-label" for="nome">Nome:</label>
                <input class="form-control" type="text" id="nome" name="nome" required>
            </div>

            <div class="mb-3">
                <label class="form-label" for="email">E-mail:</label>
                <input class="form-control" type="email" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label class="form-label" for="senha">Senha:</label>
                <input class="form-control" type="password" id="senha" name="senha" required>
            </div>

            <div class="mb-3">
                <label class="form-label" for="tipo">Tipo:</label>
                <select class="form-select" name="tipo" id="tipo" required>
                    <option value=""></option>
                    <option value="cliente">Cliente</option>
                    <option value="admin">Administrador</option>
                </select>
            </div>

            <button class="btn btn-primary" id="inserir" name="inserir"><i class="bi bi-save"></i> Inserir</button>
        </form>

    </article>
</div>
