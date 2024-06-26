<?php

// Inicia a sessão se não estiver iniciada
if (!isset($_SESSION)) {
    session_start();
}

// Função para verificar se há acesso autorizado
function verificaAcesso()
{
    // Verifica se não existe a variável de sessão 'id'
    if (!isset($_SESSION['id'])) {
        // Se não existir, destroi a sessão
        session_destroy();
        // Redireciona para a página de login com um parâmetro de acesso negado
        header("location: ../login.php?acesso_negado");
        exit;
    }
}

// Função para realizar o login do usuário na sessão
function login($id, $nome, $tipo)
{
    // Define as variáveis de sessão com os dados do usuário
    $_SESSION['id'] = $id;
    $_SESSION['nome'] = $nome;
    $_SESSION['tipo'] = $tipo;
}

// Função para realizar o logout do usuário
function logout()
{
    // Destroi a sessão
    session_destroy();
    // Redireciona para a página de login com um parâmetro de saída (logout) informando sucesso
    header("location:../login.php?saiu");
    exit;
}

// Função para verificar o nível de acesso do usuário
function verificaNivel()
{
    // Verifica se o tipo de usuário na sessão não é 'admin'
    if ($_SESSION['tipo'] != 'admin') {
        // Se não for admin, redireciona para a página não autorizada
        header("location: nao-autorizado.php");
        exit;
    }
}

?>
