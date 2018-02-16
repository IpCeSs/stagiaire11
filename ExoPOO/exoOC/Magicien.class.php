<?php

namespace exoOC;

class Magicien extends Personnage
{
    const SORT = 'sort';
    const POTION = 'potion';
    const BATON_MAGIQUE = 'bâton magique';

    public function __construct($nomAttribue)
    {
        parent::__construct($nomAttribue);

        $this->degats = 400;
        $this->experience = 15;
        $this->force = 200;
        $this->pdv = 4000;
        $this->arme = [self::SORT, self::POTION, self::BATON_MAGIQUE];
    }

    public static function attackType($arme)
    {
        $weapon = $arme[array_rand($arme, 1)];
        if ($weapon == self::SORT) {
            return "Suite au sort lancé par ";
        } elseif ($weapon == self::POTION) {
            return "Enorme dégâts causés par la potion magique lancée par ";
        } elseif ($weapon == self::BATON_MAGIQUE) {
            return "Gros coup de bâton magique lancé par ";
        }
    }


    public function frapper(Personnage $persoAFrapper)
    {
        $persoAFrapper->degats += $this->force;
        $this->experience = $this->experience + 20;
        echo $this->nom . ' lance une attaque puissante contre ' . $persoAFrapper->nom . ', qui tombe à genoux !<br>';
        echo $this->nom . ' gagne ' . $this->experience . ' points d\'expérience<br>';
        return $this->experience + 20;
    }

    public function losePdv(Personnage $attacker)
    {
        $this->pdv -= $attacker->degats;
        echo static::attackType($attacker->arme) . $attacker->nom . ', ' . $this->nom . ' n\'a plus que ' . $this->pdv . ' points de Vie <br><br>';
    }


}