<?php

$password ="1234";
$passwordHash = password_hash($password,PASSWORD_DEFAULT);

// $password ="1234";
// $passwordHash = md5($password);

    // var_dump($email);
    // var_dump($password);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PassWord</title>
</head>

<body>
    <form method="POST" action="inscription.php">
        <input type="email" placeholder="Email" name="email"><br>
        <input type="password" placeholder="Mot de passe" name="password"><br>
        <button type="submit">Inscription</button>
    </form>

    <hr>

    <form method="POST" action="login.php">
        <input type="email" placeholder="Email" name="email"><br>
        <input type="password" placeholder="Mot de passe" name="password"><br>
        <button type="submit">Connexion</button>
    </form>

</body>

</html>