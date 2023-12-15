<?php
require_once "Model.class.php";
require_once "Livre.class.php";

class LivreManager extends BDConnexion{
    private $livres;

    public function ajoutLivre($livre){
        $this->livres[] = $livre;
    }

    public function getLivres(){return $this->livres;}

    public function chargementLivres(){
        /*Cette fonction va faire une requête en BD
        - d'abord on appelle la connexion à la BD
        Après on utilise la fonctione prepare pour écrire la requête
        */
        $req = $this->getBdd()->prepare('SELECT * FROM livres');
        /*Maintenant on va l'exécuter en base de données 
        Pour récupérer les données, on utilise la fonction execute
        */
        $req->execute();
        /*On va maintenant récupérer toutes les lignes */
        $mesLivres = $req->fetchAll(PDO::FETCH_ASSOC);

        /*On ferme la requête avec closeCursor */
        $req->closeCursor();

        /*On a terminé la requete, maintenant on va les parcourir 
        On va créer des objets de type livre, ligne 24 c'est juste un 
        tableau associatif
        */
        foreach($mesLivres as $value){
            //On va gérer des livres des objets de la classe livre
            //En faisant cela, on vient de générer nos livres
            $book = new Livre($value['idLivre'],$value['titre'],$value['nbPages'],$value['image']);
            $this->ajoutLivre($book);
        }

    }

}