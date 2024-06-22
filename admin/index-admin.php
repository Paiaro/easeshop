<?php
require '../inc/sessao.php';
verificaLogin();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - EasyShop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Bem-vindo, <?= $_SESSION['usuario_nome'] ?>!</h1>
        <p>Você está na área administrativa.</p>
        <a href="../logout.php" class="btn btn-danger">Sair</a>
    </div>
</body>
</html>