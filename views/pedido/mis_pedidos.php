<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<?php if (isset($gestion)): ?>
    <h1>Gestionar Pedidos</h1>
<?php else: ?>
    <h1>Mis Pedidos</h1>
<?php endif; ?>

<div class="tablecontent2">
        <table class="tableC">
    <tr>
        <th>N° Pedido</th>
        <th>Coste</th>
        <th>Fecha</th>
        <th>Estado</th>
    </tr>

    <?php 
        while ($ped = $pedidos->fetch_object()):
    ?>
        <tr>
            <td>
                <a href="<?=base_url?>pedido/detalle&id=<?=$ped->id?>"><?=$ped->id?></a>
            </td>
            <td>
                $<?= $ped->coste ?>
            </td>
            <td>
                <?= $ped->fecha ?>
            </td>
            <td>
                <?=Utils::showStatus($ped->estado)?>
            </td>
            
            
        </tr>
    <?php endwhile; ?>
        </div>

</table>