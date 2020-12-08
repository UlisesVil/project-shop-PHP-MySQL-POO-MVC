<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<h1>Registrarse</h1>



<div class="form_container">

    <form action="<?= base_url ?>usuario/save" method="POST">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" required/>

        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" required/>

        <label for="email">Email</label>
        <input type="email" name="email" required/>

        <label for="password">Contraseña</label>
        <input type="password" name="password" required/>

        <input type="submit" value="Registrarse"/>
    </form>

</div>