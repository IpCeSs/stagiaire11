<?php
//va implementer humain via linterface
class Moi implements Humain{
    const PAYS = 'France';
    protected $adresse;
    protected $postal;
    protected $ville;
    //on a simplement retiré ces methodes de la class francais
    public function setAdresse($cA, $cV, $cP)
    {
        $this->adresse = $cA;
        $this->postal = $cP;
        $this->ville = $cV;
    }


    public function getAdresse()
    {
        return $this->adresse . '<br>' . $this->postal . '<br>' . $this->ville . '<br>' . self::PAYS;
    }
}