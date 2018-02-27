<?php

require_once __DIR__ . "/../base/localWarrior.php";


$GLOBALS['warriorID'] = 'Pikachu';


// Définissez vos class de combattants
 abstract class Warrior extends localgiWarrior {
    public $id;
    public $name;
    public $speed;
    public $life;
    public $shield;
    public $weapon;
    public $imageUrl;

    public function __construct($id,$speed=30,$life=100,$shield=20){
        $this->id=$id;
        $this->speed=$speed;
        $this->life=$life;
        $this->shield=$shield;

    }

    public function SetWeapon(Weapon $weapon){
        $this->weapon=$weapon;
    }

    public function setImageUrl($imageUrl){
        $this->imageUrl=$imageUrl;
    }
};
////////////////////////////////////////////////
class StartrekWarrior extends Warrior{
public $mentalPower;
    public function power(){
        return $this->mentalPower;
    }
    public function __construct($id,$speed=30,$life=100,$shield=20,$mentalPower=8){
        parent::__construct($id,$speed,$life,$shield);
$this->mentalPower=$mentalPower;
    }


}
////////////////////////////////////////////////
class MarvelWarrior extends Warrior{

    public $superPower;

    public function power(){
        return $this->superPower;
    }
    public function __construct($id,$speed=30,$life=100,$shield=20,$superpower=100){
        parent::__construct($id,$speed,$life,$shield);
        $this->superPower=$superpower;

}

}
//////////////////////////////////////
class PokemonWarrior extends Warrior{
    public $level;
    public function power(){
        return $this->level;

    }
    public function __construct($id,$speed=30,$life=100,$shield=20,$level=1){
        parent::__construct($id,$speed,$life,$shield);
        $this->level=$level;


    }


}
///////


////
class Weapon{
    public $id;
    public $strength;
    public $imageUrl;

    public function __construct($id,$strength)
    {
        $this->id=$id;
        $this->strength=$strength;
    }

    public function setImageUrl($imageUrl){
        $this->imageUrl=$imageUrl;
    }
}


