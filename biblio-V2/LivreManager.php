<?php

class LivreManager{
    private $Livres;

    public function ajoutLivre($livre){
        $this->Livres[] = $livre;

    }

    public function getLivre(){
        return $this->Livres;
    }
}