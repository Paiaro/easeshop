<?php
require_once "inc/cabecalho.php";
session_start();

// Verificar se o usuário está logado (vamos implementar isso depois do cadastro)
if (!isset($_SESSION["nome"])) {
  header("Location: cadastro_cliente.php"); // Redirecionar para a página de cadastro se não estiver logado
  exit();
}

?>

<body>
  <h2>Bem-vindo(a), <?php echo $_SESSION["nome"]; ?>!</h2>
  <!-- Seu conteúdo da área do cliente aqui -->
</body>

</html>