<?php
$host = 'localhost';
$db = 'database_integrador'; // Nome do seu banco de dados
$user = 'root'; // Seu usuário do banco de dados
$pass = ''; // Sua senha do banco de dados

// Conexão com o banco de dados
$conexao = new mysqli($host, $user, $pass, $db);

if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}

function buscarUsuario($conexao, $email) {
    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

function login($id, $nome, $tipo) {
    session_start();
    $_SESSION['usuario_id'] = $id;
    $_SESSION['usuario_nome'] = $nome;
    $_SESSION['usuario_tipo'] = $tipo;
}
?>
