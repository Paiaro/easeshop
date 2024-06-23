<?php

require "conecta.php";

function inserirUsuario($conexao, $nome, $email, $senha)
{
  
    $sql = "INSERT INTO usuarios (nome, email, tipo, senha) VALUES ('$nome', '$email', 'user', '$senha')";

  
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}

function lerUsuario($conexao, $id)
{
    $sql = "SELECT id, nome, email FROM usuarios WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    
    return mysqli_fetch_assoc($resultado);
}

function atualizarUsuario($conexao, $id, $nome, $email, $senha)
{
    $sql = "UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = $id";
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}

function buscarUsuario($conexao, $email)
{
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    return mysqli_fetch_assoc($resultado);
}
?>
