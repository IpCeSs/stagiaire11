<?php
$tableau= array(1,2,3,4,5,6,7,8,9,10);

//var_dump ($tableau);
foreach($tableau as $ligne=>$element){
    //var_dump($ligne);
    // on veut que chaque nombre soit *3
    $resultat=$element*3;
   // var_dump($resultat);
    $tableau[$ligne]=$resultat;

}

var_dump($tableau);