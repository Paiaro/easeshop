<?php
require_once "../inc/cabecalho.php";
require_once "../inc/funcoes-usuarios.php";

verificaNivel();

$id = (int)$_GET["id"];
$dadosDoUsuario = lerUmUsuario($conexao, $id);

if (isset($_POST['atualizar'])) {
	$nome = htmlspecialchars($_POST['nome']);
	$email = htmlspecialchars($_POST['email']);
	$tipo = htmlspecialchars($_POST['tipo']);
	if (empty($_POST['senha']) || password_verify($_POST['senha'], $dadosDoUsuario['senha'])) {

		$senha = $dadosDoUsuario['senha'];
	} else {

		$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
	}
	
	atualizarUsuario($conexao, $id, $nome, $email, $senha, $tipo);

	header("location:usuarios.php");

}

?>

<div class="row">
	<article class="col-12 bg-white rounded shadow my-1 py-4">

		<h2 class="text-center">
			Atualizar dados do usuário
		</h2>

		<form autocomplete="off" class="mx-auto w-75" action="" method="post" id="form-atualizar" name="form-atualizar">

			<div class="mb-3">
				<label class="form-label" for="nome">Nome:</label>
				<input value="<?= $dadosDoUsuario['nome'] ?>" class="form-control" type="text" id="nome" name="nome" required>
			</div>

			<div class="mb-3">
				<label class="form-label" for="email">E-mail:</label>
				<input value="<?= $dadosDoUsuario['email'] ?>" class="form-control" type="email" id="email" name="email" required>
			</div>

			<div class="mb-3">
				<label class="form-label" for="senha">Senha:</label>
				<input class="form-control" type="password" id="senha" name="senha" placeholder="Preencha apenas se for alterar">
			</div>

			<div class="mb-3">
				<label class="form-label" for="tipo">Tipo:</label>
				<select class="form-select" name="tipo" id="tipo" required>
					<option value=""></option>

					<option <?php if ($dadosDoUsuario['tipo'] == 'cliente')
								echo 'selected' ?> value="cliente">Editor</option>

					<option <?php if ($dadosDoUsuario['tipo'] == 'admin')
								echo 'selected' ?> value="admin">Administrador</option>
				</select>
			</div>

			<button class="btn btn-primary" name="atualizar"><i class="bi bi-arrow-clockwise"></i> Atualizar</button>
		</form>

	</article>
</div>

