<?php
namespace SuperheroesTD;

class SuperHeros{
    protected $nom;
    protected $pouvoir;
    protected static $id;
    protected $univers;
    protected $ville;
    protected $nomReel;
    protected  $table="superheros";


    public function __construct($nom,$pouvoir,$ville,$nomReel,$univers){

        $this->nom=$nom;
        $this->nomReel=$nomReel;
        $this->univers=$univers;
        $this->pouvoir=$pouvoir;
        $this->ville=$ville;
        self::$id++;
    }

    public function getNom(){

    }


}