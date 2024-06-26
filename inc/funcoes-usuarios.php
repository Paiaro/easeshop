<?php
require_once "conecta.php";

// Função para inserir um novo usuário no banco de dados
function inserirUsuario($conexao, $nome, $email, $tipo, $senha)
{
    // Monta a query SQL para inserção de usuário
    $sql = "INSERT INTO usuarios (nome, email, tipo, senha) VALUES ('$nome', '$email', '$tipo','$senha')";
    
    // Executa a query no banco de dados ou exibe o erro se ocorrer
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}

// Função para ler todos os usuários cadastrados no banco de dados
function lerUsuarios($conexao)
{
    // Monta a query SQL para selecionar todos os usuários ordenados por nome
    $sql = "SELECT id, nome, tipo, email FROM usuarios ORDER BY nome";
    
    // Executa a query no banco de dados ou exibe o erro se ocorrer
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    
    // Retorna todos os resultados em forma de array associativo
    return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}

// Função para ler um usuário específico pelo ID
function lerUmUsuario($conexao, $id)
{
    // Monta a query SQL para selecionar um usuário pelo ID
    $sql = "SELECT * FROM usuarios WHERE id = $id";
    
    // Executa a query no banco de dados ou exibe o erro se ocorrer
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    
    // Retorna apenas um resultado como array associativo
    return mysqli_fetch_assoc($resultado);
}

// Função para atualizar os dados de um usuário no banco de dados
function atualizarUsuario($conexao, $id, $nome, $email, $senha, $tipo)
{
    // Monta a query SQL para atualizar os dados do usuário pelo ID
    $sql = "UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha', tipo = '$tipo' WHERE id = $id ";
    
    // Executa a query no banco de dados ou exibe o erro se ocorrer
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}

// Função para excluir um usuário do banco de dados pelo ID
function excluirUsuario($conexao, $id)
{
    // Monta a query SQL para excluir um usuário pelo ID
    $sql = "DELETE FROM usuarios WHERE id = $id";
    
    // Executa a query no banco de dados ou exibe o erro se ocorrer
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}

// Função para buscar um usuário pelo email no banco de dados
function buscarUsuario($conexao, $email)
{
    // Monta a query SQL para buscar um usuário pelo email
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    
    // Executa a query no banco de dados ou exibe o erro se ocorrer
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    
    // Retorna apenas um resultado como array associativo
    return mysqli_fetch_assoc($resultado);
}
?>
