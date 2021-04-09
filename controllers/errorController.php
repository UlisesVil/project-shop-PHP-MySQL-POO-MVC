
<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

class ErrorController{
    public function index(){
        echo "<div class='errorMain'>";
        echo "<div class='generalCont'>";
        echo "<p class='errorText'>Oops! we can't find that page.</p>";
        echo "<div class='errorCont'>";
        echo "<p class='errorNum'>404</p>";
        echo "</div>";
        echo "<p class='errorText'>Take me Back to Men's Wear</p>";
        echo "<p class='errorText'><a href='http://ulisestore.atwebpages.com'>Main Page!!!</a></p>";
        echo "</div>";
        echo "</div>";
    }
}