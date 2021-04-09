<?php

class Database{
    
    public static function connect(){
        $db = new mysqli('**DB Data conection**');
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
    
}
