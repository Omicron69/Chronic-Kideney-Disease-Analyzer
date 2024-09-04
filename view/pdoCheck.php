<?php
$pdo = new PDO("mysql:host=localhost;dbname=ckd",
$username = "CKD",
$password = "abc123",
[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

try{
    $db = new PDO($pdo);
    echo "you have connected";
}catch(PDOException $e){
    $error_message = $e->getMessage();
    echo $error_message;
    exit();
}
?>
