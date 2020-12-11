<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'u161123784_relook');
define('DB_USERNAME', 'u161123784_relook');
define('DB_PASSWORD', 'Kekle@95');

try{
    $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USERNAME, DB_PASSWORD);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}catch(PDOException $e){
    header('Location: error.php');
}