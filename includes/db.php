<?php 

$dsn = "mysql:host=localhost;dbname=educa_db";

try{
    $pdo = new PDO($dsn, 'root', '');
     
    
}
catch(PDOException $e){
    echo $e->getMessage();
}


?>