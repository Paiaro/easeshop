<?php 
require_once "../inc/cabecalho-admin.php";
require_once "../inc/funcoes-usuarios.php";
require_once "../inc/funcoes-sessao.php";

// Obtém o ID do usuário a partir da sessão
$id = $_SESSION['id'];

// Lê os dados do usuário a partir do banco de dados
$dadosDoUsuario = lerUmUsuario($conexao, $id);

// Verifica se o método de requisição é POST (indicando que o formulário foi enviado)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtém os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tipo = $_SESSION['tipo'];
    
    // Verifica se a senha não foi preenchida ou se a senha preenchida é igual à senha atual
    if (empty($_POST['senha']) || password_verify($_POST['senha'], $dadosDoUsuario['senha'])) {
        $senha = $dadosDoUsuario['senha'];
    } else {
        // Se a senha foi preenchida e é diferente da senha atual, faz o hash da nova senha
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    }
    
    // Atualiza os dados do usuário no banco de dados
    atualizarUsuario($conexao, $id, $nome, $email, $senha, $tipo);
    header('Location:index.php');
}
?>

<div class="row">
    <article class="col-12 bg-white rounded shadow my-1 py-4">
        
        <h2 class="text-center">
            Atualizar meus dados
        </h2>
                
        <!-- Formulário para atualizar os dados do usuário -->
        <form autocomplete="off" class="mx-auto w-75" action="" method="post" id="form-atualizar" name="form-atualizar">

            <div class="mb-3">
                <label class="form-label" for="nome">Nome:</label>
                <!-- Campo para o nome do usuário com valor preenchido -->
                <input value="<?=$dadosDoUsuario['nome']?>" class="form-control" type="text" id="nome" name="nome" required>
            </div>

            <div class="mb-3">
                <label class="form-label" for="email">E-mail:</label>
                <!-- Campo para o e-mail do usuário com valor preenchido -->
                <input value="<?=$dadosDoUsuario['email']?>" class="form-control" type="email" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label class="form-label" for="senha">Senha:</label>
                <!-- Campo para a senha do usuário, preenchido apenas se for alterar -->
                <input class="form-control" type="password" id="senha" name="senha" placeholder="Preencha apenas se for alterar">
            </div>

            <!-- Botão para atualizar -->
            <button class="btn btn-primary" name="atualizar"><i class="bi bi-arrow-clockwise"></i> Atualizar</button>
        </form>
        
    </article>
</div>
