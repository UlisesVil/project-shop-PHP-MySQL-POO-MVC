<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

<?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'complete'): ?>
    <div class="welcomemessage">
        <strong class="alert_green">Registration completed successfully!!!</strong>
        <h2>Welcome: <?=$_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellidos?></h2>
    </div>
<?php elseif (isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
    <div class="alert"><strong class="alert_red">Failed registration enter the data correctly</strong></div>
<?php endif; ?>

<?php Utils::deleteSession('register'); ?>
<h1>Random Products</h1>
<div class="global">
    <?php while($product = $productos->fetch_object()):  ?>
        <div class="product">
            <a href="<?=base_url?>producto/ver&id=<?=$product->id?>">
                <?php if($product->imagen != null):?>
                    <div class="imgMain">
                        <img class="imgProduct" src="<?=base_url?>uploads/images/<?=$product->imagen?>"/>
                    </div>
                <?php else: ?>
                    <img class="imgMain" src="<?=base_url?>assets/img/camiseta.png"/>
                <?php endif; ?>    
                <h2><?=$product->nombre?></h2>
            </a>
            <p>$ <?=$product->precio?> USD</p>
            <a href="<?= base_url ?>carrito/add&id=<?=$product->id?>" class="button">Add to Cart</a>
        </div>
    <?php endwhile; ?>
</div>











