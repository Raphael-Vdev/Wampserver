<?php ob_start() ?>
<p>Afficher un livre</p>
<div>
    <img src="<?= URL ?>../../../public/images/<?= $livre->getImage(); ?>" alt="">
    <p>Titre : <?= $book-> getTitre(); ?></p>
    <p>Nombre de pages : <?= $book-> getNbPages(); ?></p>
</div>

<?php 
$titre = $book->getTitre();
$content = ob_get_clean();
require "template.php";
?>