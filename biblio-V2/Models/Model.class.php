<?php

abstract class BDConnexion{
    /*On définit cette attribut en static pour qu'il soit accessible 
    par toute les classes qui héritera de la classe model et non pas accessible par 
    les objets de la classe fille
    */
    private static $pdo;

    //Cette méthode est en private, je ne vais pas qu'elle soit appelée par des algorithme tiers
    //Je veux juste qu'elle soit accessible par la méthode getbdd
    private static function setBDD(){
        self::$pdo = new PDO('mysql:host=localhost;port=3306;dbname=biblio;charset=utf8','root','');
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE,pdo::ERRMODE_WARNING);
    }

    protected function getBdd(){
        if(self::$pdo === null){
            self::setBDD();
        }
        return self::$pdo;
    }
}