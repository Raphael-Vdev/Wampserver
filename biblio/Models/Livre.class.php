<?php

class Livre{    
    private $idLivre;
    private $titre;
    private $nbPages;
    private $image;

    public static $Livres;


public function __construct($idLivre, $titre, $nbPages, $image){
    $this->idLivre = $idLivre;
    $this->titre = $titre;
    $this->nbPages = $nbPages;
    $this->image = $image;
    
    self::$Livres[] = $this;
}

public function getIdLivre(){return $this->idLivre;}
public function getTitre(){return $this->titre;}
public function getNbPages(){return $this->nbPages;}
public function getimage(){return $this->image;}

public function setIdLivre($idLivre){$this->idLivre = $idLivre;}
public function setTitre($titre){$this->titre = $titre;}
public function setNbPages($nbPages){$this->nbPages = $nbPages;}
public function setImage($image){$this-> image = $image;}

}