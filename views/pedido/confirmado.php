<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<?php if (isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete'): ?>
<div class="confirm">
    <h1>Your order has been confirmed</h1>
    <p>
        Your order has been saved successfully, once you make the transfer to the
        bank account 12233445566 with the cost of the order, it will be processed and sent.
    </p>
    
    <br/>
    <?php if(isset($pedido)): ?>
        <h3>Order Data:</h3>
        
        <br/>
        Order Number: <?=$pedido->id?><br/>
        Total to Pay: $ <?=$pedido->coste?><br/>
        <br/>
        <h3>Products:</h3> 
</div>       
    <div class="table-content">
    <table class="tableC">
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Units</th>
            </tr>
            <?php while ($producto = $productos->fetch_object()): ?>

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
                        <?= $producto->precio ?>
                    </td>
                    <td>
                        <?= $producto->unidades ?>
                    </td>

                </tr>
            <?php endwhile; ?>
        </table>    
        </div>     
        
      
    <?php endif; ?>
<?php elseif (isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete'): ?>
    <h1>Tu pedido No ha podido ser procesado</h1>

<?php endif; ?>
