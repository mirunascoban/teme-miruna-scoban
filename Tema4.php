<?php

$host = 'localhost';
$db = 'pentalog';
$user = 'root';
$password = '';
$dns = 'mysql:host=$host;dbname=$db;charset=UTF8';

try{
    $pdo = new PDO($dns, $user, $password);
    if($pdo){

        echo 'Connected to the $db database successfully!';
    }
    
} catch(PDOException $e){
    echo $e->getMessage();
}



$sql = 'SELECT publisher_id, name
        FROM publishers
        ' 

?>