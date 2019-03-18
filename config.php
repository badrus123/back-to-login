<?php

$db_host = "";
$db_user = "";
$db_pass = "";
$db_name = "";

// create variabel mysqli for connection database
   
try {    
   
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
 
    die("Terjadi masalah: " . $e->getMessage());
}

?>