

<h1>Detalle del pedido</h1>

<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<div class="detalle">
    <?php if(isset($pedido)): ?>

   
        
        <?php if(isset($_SESSION['admin'])): ?>
            <h3>Cambiar Estado del pedido</h3>
            <br/>
            <form class="statep" action="<?=base_url?>pedido/estado" method="POST">
                <input type="hidden" value="<?=$pedido->id?>" name="pedido_id"/>
                <select name="estado">
                    <option value="confirm" <?=$pedido->estado=="confirm"? 'selected': '';?>>Pendiente</option>
                    <option value="preparation" <?=$pedido->estado=="preparation"? 'selected': '';?>>En preparacion</option>
                    <option value="ready" <?=$pedido->estado=="ready"? 'selected': '';?>>Preparado para enviar</option>
                    <option value="sended" <?=$pedido->estado=="sended"? 'selected': '';?>>Enviado</option>
                </select>
                <input type="submit" value="Cambiar estado" />
            </form>
            <br/>
        <?php endif; ?>





        <h3>Direccion de envio:</h3>
        <br/>
        Provincia: <?=$pedido->provincia?><br/>
        Localidad: <?=$pedido->localidad?><br/>
        Direccion: <?=$pedido->direccion?><br/><br/>
        
        <h3>Datos del pedido:</h3>
        <br/>
        Estado: <?=Utils::showStatus($pedido->estado)?><br/>
        Número del pedido: <?=$pedido->id?><br/>
        Total a pagar: $ <?=$pedido->coste?><br/>
        <br/>
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