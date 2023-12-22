<?php
require_once "dbConnect.php";
 
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    var_dump($email);
    var_dump($password);
 
    $req = $pdo->prepare('SELECT * FROM users WHERE email = :email');
    $req->bindValue('email', $email);
    // $req->bindValue('password', $password);
    $req->execute();
    $resultat = $req->fetch(PDO::FETCH_ASSOC);
    
    var_dump($resultat);
    
    // if($resultat){
    //     echo "Connexion réussie";
    // }else{
    //     echo "Identifiants invalides";
    // }
    
    if($resultat){
        $passwordHash = $resultat['password'];
        if(password_verify($password,$passwordHash)) {;
        echo "Connexion réussie";
    }else{
        echo "Identifiants invalides";
        }
    }else{
        echo "Identifiants invalides";
    }

}