<h1>Order Detail</h1>

<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<div class="detalle">
    <?php if(isset($pedido)): ?>

        <?php if(isset($_SESSION['admin'])): ?>
            <h3>Change order Status</h3>
            <br/>
            <form class="statep" action="<?=base_url?>pedido/estado" method="POST">
                <input type="hidden" value="<?=$pedido->id?>" name="pedido_id"/>
                <select name="estado">
                    <option value="confirm" <?=$pedido->estado=="confirm"? 'selected': '';?>>Pending</option>
                    <option value="preparation" <?=$pedido->estado=="preparation"? 'selected': '';?>>Preparing</option>
                    <option value="ready" <?=$pedido->estado=="ready"? 'selected': '';?>>Ready to ship</option>
                    <option value="sended" <?=$pedido->estado=="sended"? 'selected': '';?>>Sent</option>
                </select>
                <input type="submit" value="Change Status" />
            </form>
            <br/>
        <?php endif; ?>

        <h3>Shipping Address:</h3>
        <br/>
            Province: <?=$pedido->provincia?><br/>
            Location: <?=$pedido->localidad?><br/>
            Address: <?=$pedido->direccion?><br/><br/>
        
        <h3>Order Data:</h3>
        <br/>
            Status: <?=Utils::showStatus($pedido->estado)?><br/>
            Order Number: <?=$pedido->id?><br/>
            Total to pay: $ <?=$pedido->coste?><br/>
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