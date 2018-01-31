<?php
$ageDuVisiteur=17; //type de variable INT
$pseudoDuVisiteur="Matéo21"; //type de variable STRING
$argentEnPoche=55.2; //type de varible FLOAT
$connaitPHP=true; // type de variable BOOLEEN
$varNULL=NULL; // type de variable NULL
/*on affiche les variables 
pour afficher chaque partie on doit mettre un echo
*/
echo "Bonjour ";
echo $pseudoDuVisiteur;
echo " vous avez ";
echo $argentEnPoche;
echo "dollars";
echo " vous avez ";
echo $ageDuVisiteur;
echo " ans";

//pour tout noter en une phrase on écrit tout dasn les guillemets doubles
echo " Le visiteur a $ageDuVisiteur ans , il s'appelle $pseudoDuVisiteur";
//avec les guillemets simple on concatène texte + variable avec un point
echo ' Le Visiteur a '.$ageDuVisiteur. ' ans.';

//Opérations de base
$nombre=2+2; // on déclare une variable qui comporte une addition et prend donc comme valeur 4
$resultat=($nombre*10)*$nombre; /*on déclare une variable résultat dans laquelle on
réutilise la variable $nombre. ici on a donc (4x10)x4 soit 160 */
echo ' Le résultat est '.$resultat; // ON affiche une prhase contenant la variable $resultat

//MODULO :récupère le reste d'une division
$nombreA=10%2; //$nombreA prend pour valeur 0 car le reste de 10/2 est 0
$nombreB=10%3;// $nombreB prend pour valeur 1 car le reste de 10/3 est 1
echo ' Valeur $nombreB '.$nombreB; // on affiche la valeur de $nombreB soit 1
?>