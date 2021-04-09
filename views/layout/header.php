<?php
    ob_start();
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?=base_url?>assets/img/favicon.ico">
    <title>Men's Wear</title>

    <link rel="stylesheet" href="<?=base_url?>assets/css/error404.css">
    <link rel="stylesheet" href="<?=base_url?>assets/css/header.css">
    <link rel="stylesheet" href="<?=base_url?>assets/css/aside.css">
    <link rel="stylesheet" href="<?=base_url?>assets/css/forms.css">
    <link rel="stylesheet" href="<?=base_url?>assets/css/buttons.css">
    <link rel="stylesheet" href="<?=base_url?>assets/css/detail.css">
    <link rel="stylesheet" href="<?=base_url?>assets/css/products-detail.css">
    <link rel="stylesheet" href="<?=base_url?>assets/css/general.css">
    <link rel="stylesheet" href="<?=base_url?>assets/css/responsive.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://kit.fontawesome.com/94235d9528.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?=base_url?>assets/js/main.js"></script>
</head>
<body>

    <div id="layer" style="display:none;">
        <div id="navBar" style="display:none;">
            <i class="fas fa-bars navBarButton"></i>
            <?php
                ob_start();
                $navCategorias = Utils::showCategorias();
                ob_end_flush();
            ?>
            <nav id="menuNav">
                <ul>
                    <li>
                        <a href="<?=base_url?>">Main</a>
                    </li>
                    <?php
                    ob_start();
                        while($cat = $navCategorias->fetch_object()):
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
        </div>  
    </div>
    
    <div id="container"><!--closed in footer.php-->
    
        <header id="header">
            <div id="logo">
                <a class="linklogo" href="<?=base_url?>">
                    <img class="logo" src="<?=base_url?>assets/img/logo1.png" alt="Shop Logo"/>
                </a>
                <div class="title">Men's Wear</div>
            </div>

            <div class="menu">
                <?php
                    ob_start();
                        $categorias = Utils::showCategorias();
                    ob_end_flush();
                ?>
                <nav id="menu">
                    <ul>
                        <li>
                            <a href="<?=base_url?>">| Main</a>
                        </li>
                        <?php
                        ob_start();
                            while($cat = $categorias->fetch_object()):
                        ob_end_flush();
                        ?>
                        <li>
                            <a href="<?=base_url?>categoria/ver&id=<?=$cat->id?>">| <?=$cat->nombre?></a>
                        </li>
                        <?php
                        ob_start();
                            endwhile;
                        ob_end_flush();
                        ?>
                    </ul>
                </nav>
            </div>
            <div class="BarButtonContainer">
                <i class="fas fa-bars toolBarButton" style="display:block;"></i>
            </div>
        </header>
        
        <div id="content"><!--closed in footer.php-->
