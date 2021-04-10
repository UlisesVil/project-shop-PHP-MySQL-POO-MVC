<?php

class Database{
    
    public static function connect(){
        
        $db = new mysqli('**DB secret Data on Server**');
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
    
}
