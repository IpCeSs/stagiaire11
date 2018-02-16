<?php

namespace exoOC;

abstract class Personnage
{
    protected $degats;
    protected $force;
    protected $experience;
    protected $nom;
    protected $pdv;
    protected $typeAttck;
    protected $arme;

    /* //methode pour déplacer le personnage sa localisation
     public function deplacer(){

     }*/
    public function __construct($nomAttribue)
    {
        $this->nom = $nomAttribue;
    }
    //methode qui frappera le personnage
    //on passe en argument de fonction le personnage à frapper $persoAFrapper
    //on détermine  après que les dégâts augmentent en fonction
    //de la force du personnage qui frappe
    //pour être sur que l'argument soit un objet on ajoute donc la class Personnage dans
    //les arguments avant $persoAFrapper pour le transformer en objet
    abstract public function frapper(Personnage $persoAFrapper);

    // $this fait référence à l'objet en cours d'utilisation
    // methode qui augmente l'attribut $expérience
    //public function gagnerExperience(){}

    abstract public static function attackType($arme);

    abstract public function losePdv(Personnage $attacker);

    // ici on a des SETTER qui permettent d'attribuer de valeurs ou de les modifier
    /*
        public function setDegats($degats)
        {
            $this->degats = $degats;
        }

        public function setForce($force)
        {
            $this->force = $force;
        }

        public function setExperience($experience)
        {
            $this->experience = $experience;
        }
        public function setPdv($pdv)
        {
            $this->pdv = $pdv;
        }
        //ici on a des GETTER qui ont pour but de récupérer des valeurs
        public function getDegats(){
            return $this->degats;
        }
        public function getForce(){
            return $this->force;
        }
        public function getExperience(){
            echo 'Expérience totale de '.$this->nom.' : '.$this->experience.'<br>';
            return $this->experience;
        }

        public function getPdv()
        {
            return $this->pdv;
        }
    */
}
