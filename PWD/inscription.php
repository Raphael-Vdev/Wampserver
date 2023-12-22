<?php
require_once "dbConnect.php";
 
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);


    // var_dump($email);
    // var_dump($password);
 
    /*Ici on a une requête qui va nous permettre d'entrer l'email et le mot de passe de l'utilisateur */
    $req = $pdo->prepare('INSERT INTO users (email, password) VALUES (:email, :password)');
    $req->bindValue('email', $email);
    $req->bindValue('password', $password);
    $resultat = $req->execute();
 
    if ($resultat) {
        echo "Inscription réussie";
    }
}