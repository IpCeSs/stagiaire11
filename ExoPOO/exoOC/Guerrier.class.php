<?php

namespace exoOC;

class Guerrier extends Personnage
{
    const EPEE = 'épée';
    const BOUCLIER = 'Bouclier';
    const POINGS = 'Poings';
    public static $guerriersEnJeu;


    public function __construct($nomAttribue)
    {
        parent::__construct($nomAttribue);
        $this->degats = 600;
        $this->experience = 5;
        $this->force = 400;
        $this->pdv = 2000;
        $this->arme = [self::EPEE, self::BOUCLIER, self::POINGS];
        self::$guerriersEnJeu++;
    }

    public static function guerriersEnJeu()
    {
        return self::$guerriersEnJeu;
    }

    public static function attackType($arme)
    {
        $weapon = $arme[array_rand($arme, 1)];

        if (!empty($weapon))
            if ($weapon == self::EPEE) {
                return 'Après l\'attaque à l\'épée de ';
            } elseif ($weapon == self::BOUCLIER) {
                return "Esquive, parade et coup de bouclier fracassant porté par ";
            } elseif ($weapon == self::POINGS) {
                return "Quel Crochet décoché par ";
            } else {
                return 'L\'attaque a échoué';
            }
        else {
            return 'l\'attaque a échoué';
        }
    }


    public function frapper(Personnage $persoAFrapper)
    {
        $persoAFrapper->degats += $this->force;
        $this->experience = $this->experience + 10;
        echo $this->nom . ' Porte une attaque violente à ' . $persoAFrapper->nom . ', qui s\'effondre sur le sol!<br>';
        echo $this->nom . ' gagne ' . $this->experience . ' points d\'expérience<br>';
        return $this->experience + 10;
    }

    public function losePdv(Personnage $attacker)
    {
        $this->pdv -= $attacker->degats;

        echo $attacker::attackType($attacker->arme) . $attacker->nom . ', ' . $this->nom . ' n\'a plus que ' . $this->pdv . ' points de Vie <br><br>';
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