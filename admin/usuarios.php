<?php
require_once "../inc/cabecalho-admin.php";
require_once "../inc/funcoes-usuarios.php";
require_once "../inc/funcoes-sessao.php";

// Verifica se o usuário tem o nível de acesso adequado
verificaNivel();

// Obtém a lista de usuários do banco de dados
$listaUsuarios = lerUsuarios($conexao);
?>

<div class="row">
    <article class="col-12 bg-white rounded shadow my-1 py-4">
        
        <h2 class="text-center">
            Usuários <span class="badge bg-light"><?=count($listaUsuarios)?></span>
        </h2>

        <p class="text-center mt-5">
            <a class="btn btn-primary" href="usuario-insere.php">
                <i class="bi bi-plus-circle"></i>    
                Inserir novo usuário
            </a>
        </p>
                
        <div class="table-responsive">
        
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Tipo</th>
                        <th class="text-center">Operações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($listaUsuarios as $usuario): ?>
                        <tr>
                            <td> <?=$usuario["nome"]?> </td>
                            <td> <?=$usuario["email"]?> </td>
                            <td> <?=$usuario["tipo"]?></td>
                            <td class="text-center">
                                <a class="btn btn-warning" href="usuario-atualiza.php?id=<?=$usuario["id"]?>">
                                    <i class="bi bi-pencil"></i> Atualizar
                                </a>
                            
                                <a class="btn btn-danger excluir" href="usuario-exclui.php?id=<?=$usuario["id"]?>">
                                    <i class="bi bi-trash"></i> Excluir
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>                
            </table>
        </div>
        
    </article>
</div>
