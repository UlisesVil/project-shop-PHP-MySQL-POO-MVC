<h1>Shopping cart</h1>

<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

<?php if(isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1):?>
<div class="table-content">
    <table class="tableC">
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Units</th>
            <th>Delete</th>
        </tr>

        <?php
            foreach($carrito as $indice => $elemento):
            $producto = $elemento['producto'];
        ?>
        <tr>
            <td>
                <?php if ($producto->imagen != null): ?>
                    <img src="<?= base_url ?>uploads/images/<?= $producto->imagen ?>" class="img_carrito"/>
                <?php else: ?>
                    <img src="<?= base_url ?>assets/img/camiseta.png" class="img_carrito"/>
                <?php endif; ?>
            </td>
            <td>
                <a href="<?= base_url ?>producto/ver&id=<?=$producto->id?>"><?= $producto->nombre ?></a>
            </td>
            <td>
                $ <?= $producto->precio ?>
            </td>
            <td>
                <div class="updown-unidades">
                    <a href="<?=base_url?>carrito/up&index=<?=$indice?>" class="button plus">+</a>
                    <div class="units"><?= $elemento['unidades'] ?></div>
                    <a href="<?=base_url?>carrito/down&index=<?=$indice?>" class="button min">-</a>
                </div>
            </td>
            <td>
                <a href="<?=base_url?>carrito/delete&index=<?=$indice?>" class="button-carrito button-red">Delete Product</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

<div class="buttonsC">
    <div class="delete-carrito">
        <a href="<?=base_url?>carrito/delete_all" class="button-carrito button-red">Empty cart</a>
    </div>

    <div class="total-carrito">
        <?php $stats = Utils::statsCarrito();?>
        <h3>Total: $ <?=$stats['total']?></h3>
        <a href="<?=base_url?>" class="button-create">Keep buying</a>
        <a href="<?=base_url?>pedido/hacer" class="button-create">Make an order</a>
    </div>
</div>
<?php else: ?>
<p class="emptyWarn">The cart is empty add some <a class="toMain" href="<?=base_url?>">products</a></p>
<?php endif; ?>