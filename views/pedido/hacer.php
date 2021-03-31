<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<?php if (isset($_SESSION['identity'])): ?>
    <h1>Make an order</h1>
    
    <div class="hpedido">    
    <p>
        <a href="<?= base_url ?>carrito/index">See products and order price</a>
    </p>
    <br/>
    <h3>Shipping address:</h3>
    
    <form action="<?=base_url?>pedido/add" method="POST">
        <label for="provincia">Province</label>
        <input type="text" name="provincia" required/>
        
        <label for="localidad">Location</label>
        <input type="text" name="localidad" required/>
        
        <label for="direccion">Address</label>
        <input type="text" name="direccion" required/>
        
        <input type="submit" value="Confirm Order"/>
    </form>
        
<?php else: ?>
    <h1>You need to be Logged In</h1>
    <h1>You need to be logged into the Web to be able to place your order.</h1>
<?php endif; ?>
</div>

