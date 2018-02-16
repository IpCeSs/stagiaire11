<?php
namespace Cours;
/*abstract*/ class Humain{
    // ON MET protected pour que les filles heritent des propriétés et aussi
    //pour des questions de securité
protected $nom;
protected $dateInscrit;

//on crée un compteur d'objet pour la class Humain
//depend de la class et non d'un objet=> static
protected static $objCrees;

const HEURE_TRAVAIL=35;

//on déclare des methodes(fonctions)
//set sert à définir
public function __construct($nouveauNom){
    $this->nom=$nouveauNom;
    $this->dateInscrit=date('d-m-Y H:i:s');
    //on incremente le compteur d'objet à chaque npouveau construct d'obkjet
    self::$objCrees++;
}

//get sert à récupérer
public function getNom(){
    return $this->nom;
}
public function getDateInscrit(){
    return $this->dateInscrit;
}
public function getSalaire($taux){
    return $taux *self::HEURE_TRAVAIL;
}
public static function totalObjCrees(){
    return self::$objCrees;
}
//on fait une methode abstract dont on ne remplit pas le corps
//abstract public function setAdresse($cA,$cV,$cP);
}