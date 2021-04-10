<aside id="lateral">
    <?php $stats = Utils::statsCarrito(); ?>
    <i class="fas fa-shopping-cart cartHide" style="display:none !important"> <span class="unitsCart"><?=$stats['unidades']?></span></i>

	<div id="carrito" class="block_aside" style="display:none;">
		<h3>
			My Cart 
			<i class="fas fa-shopping-cart cartTitle"></i>
			<i class="fas fa-times closeCart"></i>
		</h3>
		<ul>
			<li><a href="<?=base_url?>carrito/index">Products ( <?=$stats['count']?> )</a></li>
            <li><a href="<?=base_url?>carrito/index">Articles ( <?=$stats['unidades']?> )</a></li>
			<li><a href="<?=base_url?>carrito/index">Total: <?=$stats['total']?> $</a></li>
			<li><a href="<?=base_url?>carrito/index">Cart detail</a></li>
		</ul>
	</div>
	
	<div id="login" class="block_aside">
		<?php if(!isset($_SESSION['identity'])): ?>
			<h3>Log In</h3>
			<form action="<?=base_url?>usuario/login" method="post">
				<label for="email">E-mail</label>
				<input type="email" name="email" />
				<label for="password">Password</label>
				<input type="password" name="password" />
				<input type="submit" value="Send" />
			</form>
		<?php else: ?>
			<h3>Welcome: <?=$_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellidos?></h3>
		<?php endif; ?>

		<ul>
			<?php if(isset($_SESSION['admin'])): ?>
				<li><a href="<?=base_url?>categoria/index">Manage Categories</a></li>
				<li><a href="<?=base_url?>producto/gestion">Manage Products</a></li>
				<li><a href="<?=base_url?>pedido/gestion">Manage Orders</a></li>
			<?php endif; ?>
			<?php if(isset($_SESSION['identity'])): ?>
				<li><a href="<?=base_url?>pedido/mis_pedidos">My Orders</a></li>
				<li><a href="<?=base_url?>usuario/logout">Log Out</a></li>
			<?php else: ?> 
				<li><a href="<?=base_url?>usuario/registro">Sign Up</a></li>
			<?php endif; ?> 
		</ul>
	</div>
</aside>

<div id="central"><!--tag closed in footer.php-->