<?php 
require_once "../inc/cabecalho.php"; 
require_once "../inc/conecta.php"; 
require_once "../inc/funcoes-usuarios.php"; 
require_once "../inc/funcoes-sessao.php"; 



if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = array();
}

function calcularTotalCarrinho() {
    $total = 0;
    foreach ($_SESSION['carrinho'] as $item) {
        $total += $item['preco'] * $item['quantidade'];
    }
    return $total;
}
?>

<h2>Meu Carrinho</h2>

<?php 

if (empty($_SESSION['carrinho'])): 
?>
    <p>Seu carrinho está vazio.</p>
<?php else: ?>
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
            <?php foreach ($_SESSION['carrinho'] as $id => $item): ?>
                <tr>
                    <td><?= $item['nome'] ?></td>
                    <td>R$ <?= number_format($item['preco'], 2, ',', '.') ?></td>
                    <td><?= $item['quantidade'] ?></td>
                    <td>R$ <?= number_format($item['preco'] * $item['quantidade'], 2, ',', '.') ?></td>
                    <td>
                        <a href="remover-carrinho.php?id=<?= $id ?>" class="btn btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p><strong>Total: R$ <?= number_format(calcularTotalCarrinho(), 2, ',', '.') ?></strong></p>

    <a href="finalizar-compra.php" class="btn btn-primary">Finalizar Compra</a>

<?php endif; ?>

