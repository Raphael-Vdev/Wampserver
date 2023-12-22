<?php ob_start() ?>
<p>Livre</p>
<form methode="POST" action="<?= URL ?>livre/av" enctype="multipart/form-data">
    <!-- Ce que l'utilisateur  -->
<label for="titre"> Titre :</label><br>


<input type="text" id="titre" name="titre" >


<?php 
$titre = "Modification du Livre :" .$livre->getLivre();
$content = ob_get_clean();
require "template.php"; 
?>