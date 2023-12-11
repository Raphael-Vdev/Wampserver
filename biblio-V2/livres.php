<?php 
require_once "Livre.class.php";
require_once "LivreManager.php";


$Livre1 = new Livre (1, "HTML" , 300, "html.jpg");
$Livre2 = new Livre (2, "CSS" , 300, "css.jpg");
$Livre3 = new Livre (3, "Le JavaScript" , 100, "js.jpg");
$Livre4 = new Livre (4, "PHP 8" , 200, "php.jpg");

$LivreManager = new LivreManager;

$LivreManager->ajoutLivre($Livre1);
$LivreManager->ajoutLivre($Livre2);
$LivreManager->ajoutLivre($Livre3);
$LivreManager->ajoutLivre($Livre4);

$Livres = [$Livre1 , $Livre2 , $Livre3 , $Livre4];

ob_start()
?>
    <table>
        <tr>
            <th>Image</th>
            <th>Titre</th>
            <th>Nombre de pages</th>
            <th>Actions</th>
        </tr>
        
        <?php for($i=0;$i<count($LivreManager->getLivre());$i++) : ?>


        <tr>
        <td><img src="public/images/<?= $LivreManager->getLivre()[$i]->getImage();?>"></td>
            <td><?= $LivreManager->getLivre()[$i]->getTitre();?></td>          
            <td><?= $LivreManager->getLivre()[$i]->getNbPages();?></td>  


                    <!-- <td><?= Livre::$Livres[$i]->getTitre();?></td>
                    <td><?= Livre::$Livres[$i]->getNbPages();?></td>     -->

            <td>
                <!-- Divisez la colonne "Actions" en deux sous-colonnes -->
                <button>Modifier</button>
                <button>Supprimer</button>
            </td>
        </tr>

        <?php endfor; ?>


    </table>
    <button>Ajouter</button>


<?php 
$titre = "Les livres de la bibliothèque";
$content = ob_get_clean();
require "template.php"; 
?>
