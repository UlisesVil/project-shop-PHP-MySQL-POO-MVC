<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

<?php if (isset($categoria)): ?>
    <h1><?= $categoria->nombre ?></h1>

    <?php if ($productos->num_rows == 0): ?>
        <p>There are not products to show</p>
    <?php else: ?>  
        <div class="global">
            <?php while ($product = $productos->fetch_object()): ?>
            <div class="product">
                <a href="<?= base_url ?>producto/ver&id=<?= $product->id ?>">
                    <?php if ($product->imagen != null): ?>
                    <div class="imgMain">
                        <img class="imgProduct" src="<?= base_url ?>uploads/images/<?= $product->imagen ?>"/>
                    </div>
                    <?php else: ?>
                        <img src="<?= base_url ?>assets/img/camiseta.png"/>
                    <?php endif; ?>
                    <h2><?= $product->nombre ?></h2>
                </a>
                <p>$ <?= $product->precio ?> USD</p>
                <a href="<?= base_url ?>carrito/add&id=<?=$product->id?>" class="button">Add to Cart</a>
            </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
<?php else: ?>
    <h1>The category does not exist</h1>
<?php endif; ?>



    
    