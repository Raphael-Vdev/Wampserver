<?php
    require_once "Models/LivreManager.class.php" ;

class livresController{

    private $livreManager;

    public function __construct(){
        // require_once "Models/LivreManager.class.php";
        $this->livreManager = new LivreManager;
        $this->livreManager->chargementLivres();
    }

    public function afficherLivre(){    
        $livres = $this->livreManager->getLivres();
        require "Views/livres.view.php" ;
    }

}