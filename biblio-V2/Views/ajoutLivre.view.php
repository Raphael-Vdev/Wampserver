<?php ob_start() ?>

<form method="POST" action="<?= URL ?>livres/av" enctype="multipart/form-data">
    <label for="titre">Titre :</label><br>
    <input type="text" id="titre" name="titre" value=""><br>
    <label for="nbPages">Nombre de pages :</label><br>
    <input type="number" id="nbPages" name="nbPages" value=""><br><br>

    <label for="image">Nombre de pages :</label><br>
    <input type="file" id="image" name="image"><br>

    <br><br>
    <input type="submit" value="Valider">
</form>

<?php 
$titre = "Ajout d'un livre";
$content = ob_get_clean();
require "template.php";
?>