<?php
require_once "Controller/LivresController.php";
$livreController = new livresController;


if (empty($_GET['page'])){
    require_once "Views/accueil.view.php";


}else{
    switch($_GET['page']){
        case "accueil" : require_once "Views/accueil.view.php";
        break;

        case "livres" : $livreController->afficherLivre();
        break;
    }
}

