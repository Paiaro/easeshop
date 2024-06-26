<?php
require_once "../inc/funcoes-usuarios.php";
require_once "../inc/funcoes-sessao.php";

// Verifica se o usuário tem acesso permitido
verificaAcesso();

// Verifica se o usuário tem o nível de acesso adequado
verificaNivel();

// Verifica se foi passado um ID válido via GET e então exclui o usuário correspondente
if (isset($_GET['id']) && !empty((int)$_GET['id'])) {
    // Converte o ID para inteiro para segurança
    $id = (int)$_GET['id'];
    
    // Chama a função para excluir o usuário do banco de dados
    excluirUsuario($conexao, $id);
    
    // Redireciona de volta para a página de usuários após a exclusão
    header("Location: usuarios.php");
    exit;
}
?>
