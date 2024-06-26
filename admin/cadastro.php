<?php
require_once "../inc/cabecalho.php";
require_once "../inc/funcoes-usuarios.php";


if (isset($_POST['cadastrar'])) {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    inserirUsuario($conexao, $nome, $email, $tipo, $senha);
    
   
    $clienteId = $conexao->insert_id;
    
    
    $_SESSION['id'] = $clienteId;
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    $_SESSION['tipo'] = 'cliente';

    header("location:index.php");
    exit();
}
?>

<div class="row">
    <article class="col-12 bg-white rounded shadow my-1 py-4">
        <h2 class="text-center">Cadastro de Cliente</h2>

        <form autocomplete="off" class="mx-auto w-75" action="" method="post" id="form-cadastrar" name="form-cadastrar">
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

            <button class="btn btn-primary" id="cadastrar" name="cadastrar"><i class="bi bi-save"></i> Cadastrar</button>
        </form>
    </article>
</div>

