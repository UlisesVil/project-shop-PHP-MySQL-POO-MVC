
<h1>Create Category</h1>

<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<div class="form_container">
    <form action="<?= base_url ?>categoria/save" method="POST">
        <label for="nombre">Name</label>
        <input type="text" name="nombre" required/>

        <input type="submit" value="Save" />
    </form>
</div>

