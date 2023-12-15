<?php 

require_once "Models/Model.class.php";
require_once "Models/LivreManager.class.php";

ob_start() 
?>
    <table>
        <tr>
            <th>Image</th>
            <th>Titre</th>
            <th>Nombre de pages</th>
            <th>Actions</th>
        </tr>

        <?php for($i=0;$i<count($livres);$i++) : ?>

        <tr>
            <td><img src="public/images/<?= $livres[$i]->getImage();?>" alt=""></td>
            <td><?= $livres[$i]->getTitre();?></td>
            <td><?= $livres[$i]->getNbPages();?></td>
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
