<?php

require_once __DIR__ . "/../base/baseBattleField.php";
require_once "warrior.php";


class BattleField extends BaseBattleField
{
    public static function createMyWarrior()
    {
        $pokemon = new PokemonWarrior($GLOBALS['warriorID']);

        $weapon = new Weapon('hache', '10000');
        $weapon->setImageUrl("http://www.patricereboul.com/objets/produits/zoom%20R00531.jpg");

        $pokemon->setImageUrl("http://www.p-pokemon.com/images-pokemon-actualite/pict_pokeacute-mon-fan-un-pikachu-acrobate-agrave-taiwan_40826_1_.png");
        $pokemon->setWeapon($weapon);
        $pokemon->saveNew();
    }

    public static function createOtherWarrior()
    {
        $tornade = new MarvelWarrior('tornade');
        $attaque = new Weapon('tempête destructrice', '5000');
        $attaque->setImageUrl("http://www.1001-votes.com/vote/1234fonds/tempete-1452724986701-u.jpg");
        $tornade->setImageUrl("https://media.melty.fr/article-2838125-head-f1440664326/super-story-tornade-x-men-storm-ororo-munroe.jpg");
        $tornade->setWeapon($attaque);
        $tornade->saveNew();
    }


}
