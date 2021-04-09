<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

<h1>Manage Products</h1>

<a href="<?=base_url?>producto/crear" class="button-createp">
    Create Product
</a>

<?php if(isset ($_SESSION['producto']) && $_SESSION['producto'] == 'complete'): ?>
    <div class="alert"><strong class="alert_green">The product has been created successfully</strong></div>
<?php elseif(isset ($_SESSION['producto']) && $_SESSION['producto'] != 'complete'): ?>
    <div class="alert"><strong class="alert_red">The product has NOT been created correctly</strong></div>
<?php endif; ?>

<?php Utils::deleteSession('producto'); ?>  

<?php if(isset ($_SESSION['delete']) && $_SESSION['delete'] == 'complete'): ?>
    <div class="alert"><strong class="alert_green">The product has been DELETED correctly</strong></div>
<?php elseif(isset ($_SESSION['delete']) && $_SESSION['delete'] != 'complete'): ?>
    <div class="alert"><strong class="alert_red">The product has NOT been REMOVED correctly</strong></div>
<?php endif; ?>

<?php Utils::deleteSession('delete'); ?>     

<div class="tablecontent2">
    <table class="tableC">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Actions</th>
        </tr>
        <?php  while($pro = $productos->fetch_object()): ?>
            <tr>
                <td><?=$pro->id;?></td>
                <td><?=$pro->nombre;?></td>
                <td><?=$pro->precio;?></td>
                <td><?=$pro->stock;?></td>
                <td>
                    <a href="<?=base_url?>producto/editar&id=<?=$pro->id?>" class="button-gestion ">Edit</a>
                    <a href="<?=base_url?>producto/eliminar&id=<?=$pro->id?>" class="button-gestion button-red">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>