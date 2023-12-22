<?php

try{
    $pdo =new PDO('mysql:host=localhost;port=3308;dbname=users;charset=utf8','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Impossible de se connecter : ". $e->getMessage();
}