<?php
require_once "../inc/cabecalho.php";
require_once "../inc/funcoes-usuarios.php";

// Verifica o nível de acesso do usuário
verificaNivel();

// Obtém o ID do usuário a ser atualizado a partir dos parâmetros GET
$id = (int)$_GET["id"];

// Obtém os dados do usuário pelo ID
$dadosDoUsuario = lerUmUsuario($conexao, $id);

// Verifica se o formulário foi submetido (método POST)
if (isset($_POST['atualizar'])) {
    // Obtém os dados atualizados do formulário
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $tipo = htmlspecialchars($_POST['tipo']);
    
    // Verifica se a senha foi deixada em branco ou se é igual à senha atual
    if (empty($_POST['senha']) || password_verify($_POST['senha'], $dadosDoUsuario['senha'])) {
        // Mantém a senha atual se não houver alterações
        $senha = $dadosDoUsuario['senha'];
    } else {
        // Hash da nova senha se foi alterada
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    }
    
    // Chama a função para atualizar os dados do usuário no banco de dados
    atualizarUsuario($conexao, $id, $nome, $email, $senha, $tipo);
    
    // Redireciona para a página de usuários após a atualização
    header("location:usuarios.php");
    exit;
}
?>

<div class="row">
    <article class="col-12 bg-white rounded shadow my-1 py-4">

        <h2 class="text-center">
            Atualizar dados do usuário
        </h2>

        <!-- Formulário para atualização dos dados do usuário -->
        <form autocomplete="off" class="mx-auto w-75" action="" method="post" id="form-atualizar" name="form-atualizar">

            <div class="mb-3">
                <label class="form-label" for="nome">Nome:</label>
                <!-- Campo para o nome do usuário preenchido com o valor atual -->
                <input value="<?= $dadosDoUsuario['nome'] ?>" class="form-control" type="text" id="nome" name="nome" required>
            </div>

            <div class="mb-3">
                <label class="form-label" for="email">E-mail:</label>
                <!-- Campo para o e-mail do usuário preenchido com o valor atual -->
                <input value="<?= $dadosDoUsuario['email'] ?>" class="form-control" type="email" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label class="form-label" for="senha">Senha:</label>
                <!-- Campo para a senha do usuário, preenchido apenas se for alterar -->
                <input class="form-control" type="password" id="senha" name="senha" placeholder="Preencha apenas se for alterar">
            </div>

            <div class="mb-3">
                <label class="form-label" for="tipo">Tipo:</label>
                <!-- Dropdown para selecionar o tipo de usuário -->
                <select class="form-select" name="tipo" id="tipo" required>
                    <option value=""></option>
                    <option <?php if ($dadosDoUsuario['tipo'] == 'cliente') echo 'selected' ?> value="cliente">Cliente</option>
                    <option <?php if ($dadosDoUsuario['tipo'] == 'admin') echo 'selected' ?> value="admin">Administrador</option>
                </select>
            </div>

            <!-- Botão para atualizar -->
            <button class="btn btn-primary" name="atualizar"><i class="bi bi-arrow-clockwise"></i> Atualizar</button>
        </form>

    </article>
</div>
