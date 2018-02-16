<?php

class francais extends Humain
{
    //const PAYS = 'France';

    //on modifie setNom() pour que $nom stocke un nom en maj
    //on dit qu'on surcharge la méthode setNom()
    //public function setNom($nouveauNom)
    public function __construct($nouveauNom)
    {
        parent::__construct($nouveauNom);

        $this->nom = strtoupper($nouveauNom);
        //$this->dateInscrit=date('d-m-Y H:i:s');
        //devient redondant car on recupère le construct du parent::


    }
//comme on utilise construct dasn la mère setNom
//n'est plus d'actualité on met un construct ici aussi
//ppour afficher upper . qui ve surcharger
//humain

    public function setPostal($codePostal)
    {
        $this->postal = $codePostal;
    }

    /*public function getPostal()
    {
        return $this->postal;
    }*/

/*/on donne des propriétés à la methode abstract de la mere
    public function setAdresse($cA, $cV, $cP)
    {
        $this->adresse = $cA;
        $this->postal = $cP;
        $this->ville = $cV;
    }

// on récupère les données de setadresse
    public function getAdresse()
    {
        return $this->adresse . '<br>' . $this->postal . '<br>' . $this->ville . '<br>' . self::PAYS;
    }*/
}