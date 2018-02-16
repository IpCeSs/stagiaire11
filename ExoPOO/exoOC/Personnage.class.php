<?php
class Personnage{
    private $force=50;
    private $localisation='Annecy';
    private $experience=100;
    private $degats=50;
    protected $nom;



   /* //methode pour déplacer le personnage sa localisation
    public function deplacer(){

    }*/
   public function __construct($nomAttribue)
   {
       $this->nom=$nomAttribue;
   }
    //methode qui frappera le personnage
    //on passe en argument de fonction le personnage à frapper $persoAFrapper
    //on détermine  après que les dégâts augmentent en fonction
    //de la force du personnage qui frappe

    //pour être sur que l'argument soir un objet on ajoute donc la class Personnage dans
    //les arguments avant $persoAFrapper pour le transformer en objet
    public function frapper(Personnage $persoAFrapper){
            $persoAFrapper->degats+=$this->force;
            echo $this->nom.' frappe violement '.$persoAFrapper->nom.'<br>';
    }
    public function afficherExperience(){
        echo 'Expérience totale de '.$this->nom.' : '.$this->experience.'<br>';
        return $this->experience;
    }
    // $this fait référence à l'objet en cours d'utilisation
    // methode qui augmente l'attribut $expérience
    public function gagnerExperience(){
      $this->experience=$this->experience+1;
        echo $this->nom.' gagne '.$this->experience.' expérience<br>';
      return $this->experience+1;
    }
//ici on a des getter qui ont pour but de récupérer des valeurs
    public function getDegats(){
        return $this->degats;
    }
    public function getForce(){
        return $this->degats;
    }


}
