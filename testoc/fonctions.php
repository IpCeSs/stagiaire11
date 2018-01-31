<?php
// EXEMPLES MODIFICATION CHAINE DE CARACTERES (fonction existantes)
// fonction qui récupère la longueur d'une chaine de caractère strlen
$phrase ='Hello les zouaves!';
$longueur=strlen($phrase);
echo 'La phrase ci-dessous comporte '.$longueur.' caractères: <br>'.$phrase.'</br>';
// remplacer une chaine de caractères avec str_replace
//prend trois parametres le caractère/la chaine à remplacer, ce par quoi on remplace, et la chaine dans laquelle faire la modif.

$bimbam=str_replace('b', 'p', 'bim bam boum');
echo $bimbam.'</br>';
  
//mélanger les lettres str_shuffle . prend poour paramètre la chaine'' ou la variable qui contient la chaîne
$phrase=str_shuffle($phrase);
echo $phrase.'</br>';

// mettre en minuscule strtolower
$majuscule='BONJOUR LES LOULOUS';
$majuscule=strtolower($majuscule);
echo $majuscule.'</br>';

//mettre en majuscules strtoupper
$minuscule='bonjour les chatons!';
$minuscule=strtoupper($minuscule);
echo $minuscule.'</br>';

//récupérer la date avec la fonction DATE attention aux majuscules et min
$heure=date('H');
$jour=date('d');
$minute=date('i');
$Mois=date('m');
$annee=date('y');
echo 'Nous sommes le '.$jour.' '.$Mois.' '.$annee.' '.' il est '.$heure.'h'.$minute.'</br>';

//CREER UNE FONCTION POUR DIRE BONJOUR A PLUSIEURS PERSONNES(ne renvoie pas de valeur fait juste une action)

//On déclare une fonction avec en paramètre la variable nom qui changera à chaque fois lorsqu'on passera un nom en param de fonction
function direBonjour($nom)
{
    echo 'Bonjour '.$nom.' !!</br>';
}
//on lance donc la fonction avec différents paramètres qui équivaudront à la variable $nom
direBonjour('Jules');
direbonjour('Jean');
direBonjour('Peter');
direBonjour('Jo');

//CREER UNE FONCTION QUI CALCULERA LE VOLUME D4UN CONE
//mon essai de code
function volumeCone($rayon, $hauteur)
{
    $resultat= $rayon*$rayon*3.14*$hauteur*(1/3);
  
    echo 'Le volume du cone qui a '.$rayon.' de rayon et '.$hauteur.' de hauteur est '.$resultat.'</br>';
    return $resultat;
}
volumeCone(3, 1);
//code OC
// Ci-dessous, la fonction qui calcule le volume du cône
function VolumeConeOC($rayon, $hauteur)
{
    $volume = $rayon * $rayon * 3.14 * $hauteur * (1/3); // calcul du volume
   return $volume; // indique la valeur à renvoyer, ici le volume
}

$volume = VolumeConeOC(3, 1);
echo 'Le volume d\'un cône de rayon 3 et de hauteur 1 est de ' . $volume;
