<?php

class Database{
    
    public static function connect(){
        $db = new mysqli('**DATABASE DATA**');
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
    
    
}
