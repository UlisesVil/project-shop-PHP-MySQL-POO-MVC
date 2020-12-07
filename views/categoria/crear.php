
<h1>Crear Categoria</h1>

<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<div class="form_container">
    <form action="<?= base_url ?>categoria/save" method="POST">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" required/>

        <input type="submit" value="Guardar" />
    </form>
</div>

