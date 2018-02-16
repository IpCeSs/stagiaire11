<?php
namespace exoOC;

class Guerrier extends Personnage{

    public $degats=200;
    protected $force=500;
    protected $experience=5;
    protected $pdv=2000;

    public function __construct($nomAttribue)
    {
        parent::__construct($nomAttribue);
        $this->degats= 600;
        $this->experience=5;
        $this->force=400;
        $this->pdv=2000;
    }

    public function frapper(Personnage $persoAFrapper){
        $persoAFrapper->degats+=$this->force;
        $this->experience=$this->experience+10;
        echo $this->nom.' frappe violement '.$persoAFrapper->nom.' avec son épée<br>';
        echo $this->nom.' gagne '.$this->experience.' points d\'expérience<br>';
        return $this->experience+10;
    }

    public function losePdv(Personnage $attacker)
    {
        $this->pdv -= $attacker->degats;


        echo "Suite à l'attaque à l'épée de".$attacker->nom.', '.$this->nom . ' n\'a plus que ' . $this->pdv . ' points de Vie <br>';
    }

    //on inclue gagner expérience dans frapper car c'est l'action de frapper
    //qui fait gagner de l'expérience
    //on garde quand même la function au cas d'autres action fassent
    //gagner de l'expérience dans le futur
    /*public function gagnerExperience(){
        $this->experience=$this->experience+10;
        echo $this->nom.' gagne '.$this->experience.' expérience<br>';
        return $this->experience+1;
    }*/
}