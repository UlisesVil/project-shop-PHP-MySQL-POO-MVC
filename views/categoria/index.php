
<h1>Manage Categories</h1>

<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

<a href="<?=base_url?>categoria/crear" class="button-createp">
    Create category
</a>
<div class="table-content">
    <table class="tableC2">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        <?php  while($cat = $categorias->fetch_object()): ?>
            <tr>
                <td><?=$cat->id;?></td>
                <td><?=$cat->nombre;?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>