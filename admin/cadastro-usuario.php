<?php
require_once "../inc/cabecalho.php";
require "../inc/conecta.php";
require "../inc/funcoes-usuarios.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $tipo = 'cliente';

    inserirUsuario($conexao, $nome, $email, $tipo, $senha);
    echo "<p>Usuário cadastrado com sucesso!</p>";
}
?>
<link rel="stylesheet" href="../css/estilo-index.css">

<div class="container">
    <h2>Cadastro de Cliente</h2>
    <form action="cadastro-usuario.php" method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

<?php
require_once "../inc/footer.php";
?>