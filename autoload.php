<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

<?php
    function app_autoloader($classname){
        include 'controllers/' . $classname . '.php';
    }
    spl_autoload_register('app_autoloader');
?>