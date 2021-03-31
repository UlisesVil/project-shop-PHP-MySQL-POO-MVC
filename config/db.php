<?php

class Database{
    
    public static function connect(){
        $db = new mysqli('localhost','root','','tienda_master');
        //$db = new mysqli('fdb30.awardspace.net','3674301_ulisestore','ulisestore3674301','3674301_ulisestore');
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
    
    
}
