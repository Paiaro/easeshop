<?php
require_once "../inc/cabecalho-admin.php";

// Inicia a sessão, caso ainda não tenha sido iniciada
if (!isset($_SESSION)) {
    session_start();
}
?>

<!-- Estrutura principal do artigo -->
<article class="p-5 my-4 rounded-3 bg-white shadow">
    <div class="container-fluid py-1">
        <!-- Saudação ao usuário com seu nome -->
        <h2 class="display-4">Olá <?= $_SESSION['nome'] ?></h2>
        
        <!-- Informações sobre o painel de controle e o nível de acesso do usuário -->
        <p class="fs-5">Você está no <b>painel de controle e administração</b> do
            site easyshop e seu <b>nível de acesso</b> é <span class="badge bg-light"> <?= $_SESSION['tipo'] ?> </span>.
        </p>
        <hr class="my-4">

        <!-- Botões de navegação para diferentes funcionalidades do painel de controle -->
        <div class="d-grid gap-2 d-md-block text-center">
            <!-- Botão para acessar o perfil do usuário -->
            <a class="btn btn-dark bg-gradient btn-lg" href="meu-perfil.php">
                <i class="bi bi-person"></i> <br>
                Meu perfil
            </a>
            <!-- Verifica se o gerenciador de usuários deve ser exibido -->
            <?php if (!ocultarGerenciador()) : ?>
                <!-- Botão para gerenciar usuários -->
                <a class="btn btn-dark bg-gradient btn-lg" href="usuarios.php">
                    <i class="bi bi-people"></i> <br>
                    Gerenciar usuários
                </a>
            <?php endif; ?>
            <!-- Botão para adicionar produtos -->
            <a class="btn btn-dark bg-gradient btn-lg" href="inserir_produtos.php">
                <i class="bi bi-newspaper"></i> <br>
                Adicionar produtos
            </a>
        </div>
    </div>
</article>
