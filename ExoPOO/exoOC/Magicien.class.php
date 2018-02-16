<?php

namespace exoOC;

class Magicien extends Personnage
{
    public function __construct($nomAttribue)
    {
        parent::__construct($nomAttribue);

        $this->degats= 400;
        $this->experience=15;
        $this->force=200;
        $this->pdv=4000;
    }

    public function frapper(Personnage $persoAFrapper)
    {
        $persoAFrapper->degats += $this->force;
        $this->experience = $this->experience + 20;
        echo $this->nom . ' lance un sort puissant contre ' . $persoAFrapper->nom . ', qui tombe à genoux !<br>';
        echo $this->nom . ' gagne ' . $this->experience . ' points d\'expérience<br>';
        return $this->experience + 20;
    }

    public function losePdv(Personnage $attacker)
    {
        $this->pdv -= $attacker->degats;


        echo "Suite au sort lancé par " . $attacker->nom . ', ' . $this->nom . ' n\'a plus que ' . $this->pdv . ' points de Vie <br><br>';
    }


}