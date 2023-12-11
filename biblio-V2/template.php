<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- <script src="public/js/script.js"></script> -->
    <link rel="stylesheet" href="style.css">
    <title>Bibliothèque</title>
</head>
<body>
    <section class="container">
        <header>
            <nav>
                <h2 class="logo">AFCI | <span>BIBLIOTHEQUE</span></h2>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="livres.php">Livres</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
                <!-- <button type="button">Connexion</button> -->
            </nav>
        </header>
        <div class="contenu">
            <h1><?= $titre ?></h1>
            <?= $content ?>
        </div>

        <footer>
            <p>2023 / 2024 © Tous droits réservés</p>
        </footer>
    </section>
    
</body>
</html>
