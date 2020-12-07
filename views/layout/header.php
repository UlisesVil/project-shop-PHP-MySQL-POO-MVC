<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de camisetas</title>
    <link rel="stylesheet" href="<?=base_url?>assets/css/styles.css">
</head>
<body>
<div id="container">
<!-- CABECERA -->
<header id="header">
    <div id="logo">
        <img src="<?=base_url?>assets/img/camiseta.png" alt="Camiseta Logo"/>
        <a href="<?=base_url?>">
            Tienda de Camisetas
        </a>
    </div>

</header>

            <!-- MENU -->
<?php
ob_start();
    $categorias = Utils::showCategorias();
ob_end_flush();
?>
<nav id="menu">
    <ul>
        <li>
            <a href="<?=base_url?>">Inicio</a>
        </li>
<?php
ob_start();
    while($cat = $categorias->fetch_object()):
ob_end_flush();
?>
        <li>
            <a href="<?=base_url?>categoria/ver&id=<?=$cat->id?>"><?=$cat->nombre?></a>
        </li>
<?php
ob_start();
    endwhile;
ob_end_flush();
?>
                    
    </ul>

</nav>


<div id="content">