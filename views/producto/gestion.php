<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<h1>Gestion de Productos</h1>

<a href="<?=base_url?>producto/crear" class="button-createp">
    Crear Producto
</a>

<?php if(isset ($_SESSION['producto']) && $_SESSION['producto'] == 'complete'): ?>
<div class="alert"><strong class="alert_green">El producto se ha creado correctamente</strong></div>
<?php elseif(isset ($_SESSION['producto']) && $_SESSION['producto'] != 'complete'): ?>
<div class="alert"><strong class="alert_red">El producto NO se ha creado correctamente</strong></div>
<?php endif; ?>
<?php Utils::deleteSession('producto'); ?>  

<?php if(isset ($_SESSION['delete']) && $_SESSION['delete'] == 'complete'): ?>
<div class="alert"><strong class="alert_green">El producto se ha ELIMINADO correctamente</strong></div>
<?php elseif(isset ($_SESSION['delete']) && $_SESSION['delete'] != 'complete'): ?>
<div class="alert"><strong class="alert_red">El producto NO se ha ELIMINADO correctamente</strong></div>
<?php endif; ?>
<?php Utils::deleteSession('delete'); ?>     
    
    <div class="tablecontent2">
        <table class="tableC">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
            <?php  while($pro = $productos->fetch_object()): ?>
                <tr>
                    <td><?=$pro->id;?></td>
                    <td><?=$pro->nombre;?></td>
                    <td><?=$pro->precio;?></td>
                    <td><?=$pro->stock;?></td>
                    <td>
                        <a href="<?=base_url?>producto/editar&id=<?=$pro->id?>" class="button button-gestion ">Editar</a>
                        <a href="<?=base_url?>producto/eliminar&id=<?=$pro->id?>" class="button button-gestion button-red">Eliminar</a>
                        <!--como el id es el tercer parametro get se usa & en lugar de ? -->
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>