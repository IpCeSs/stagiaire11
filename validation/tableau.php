<?php 
include("bdfonction.php");

$tableau= array(1,2,3,4,5,6,7,8,9,10);

//var_dump ($tableau);
foreach ($tableau as $ligne=>$element) {
    
    // on veut que chaque nombre soit *3
    // on crée une fonction que l'on met dans un fichier externe que l'on a appelé grace à include en debut de php

  
    $tableau[$ligne]=multiplier($element, 3);
    //ici le second argument est modifié et prend le pas sur celui défini initialement dasn la fonction $titi
}

var_dump($tableau);
