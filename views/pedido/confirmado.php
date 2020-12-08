<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<?php if (isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete'): ?>
<div class="confirm">
    <h1>Tu pedido ha sido confirmado</h1>
    <p>
        Tu pedido ha sido guardado con exito, una vez que realices la transferencia 
        bancaria a la cuenta 12233445566 con el coste del pedido, sera procesado y enviado.
    </p>
    
    <br/>
    <?php if(isset($pedido)): ?>
        <h3>Datos del pedido:</h3>
        
        <br/>
        Número del pedido: <?=$pedido->id?><br/>
        Total a pagar: $ <?=$pedido->coste?><br/>
        Productos: 
</div>       
    <div class="table-content">
    <table class="tableC">
            <tr>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Unidades</th>
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
