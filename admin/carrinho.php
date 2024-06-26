<?php 
require_once "../inc/cabecalho-admin.php"; 
require_once "../inc/conecta.php"; 
require_once "../inc/funcoes-usuarios.php"; 
require_once "../inc/funcoes-sessao.php"; 

// Verifica se o carrinho não está definido na sessão, se não estiver, inicializa-o como um array vazio
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = array();
}

// Função para calcular o total do carrinho
function calcularTotalCarrinho() {
    $total = 0;
    // Itera sobre os itens do carrinho e calcula o total
    foreach ($_SESSION['carrinho'] as $item) {
        $total += $item['preco'] * $item['quantidade'];
    }
    return $total;
}
?>

<h2>Meu Carrinho</h2>

<?php 
// Verifica se o carrinho está vazio
if (empty($_SESSION['carrinho'])): 
?>
    <p>Seu carrinho está vazio.</p>
<?php else: ?>
    <!-- Tabela de itens do carrinho -->
    <table class="table">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Subtotal</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <!-- Itera sobre os itens do carrinho e exibe cada um na tabela -->
            <?php foreach ($_SESSION['carrinho'] as $id => $item): ?>
                <tr>
                    <td><?= $item['nome'] ?></td>
                    <td>R$ <?= number_format($item['preco'], 2, ',', '.') ?></td>
                    <td><?= $item['quantidade'] ?></td>
                    <td>R$ <?= number_format($item['preco'] * $item['quantidade'], 2, ',', '.') ?></td>
                    <td>
                        <!-- Link para remover o item do carrinho -->
                        <a href="remover-carrinho.php?id=<?= $id ?>" class="btn btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Exibe o total do carrinho -->
    <p><strong>Total: R$ <?= number_format(calcularTotalCarrinho(), 2, ',', '.') ?></strong></p>

    <!-- Link para finalizar a compra -->
    <a href="finalizar-compra.php" class="btn btn-primary">Finalizar Compra</a>

<?php endif; ?>
