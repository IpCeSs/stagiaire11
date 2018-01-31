<?php
$age=24; // on déclare la vatriable
/* si $age est inférieur ou égal à 12 on affihce salut gamin
sinon (sous entendu si $age est supérieur à 12) on affiche bonjour monsieur*/
if ($age<=12) {
    echo "Salut Gamin!";
} else {
    echo "Bonjour Monsieur";
}
// condition avec booléens
$autorisationEntrer=false;
if ($autorisationEntrer) {
    echo " bienvenue";
} else {
    echo "tu ne peux pas rentrer";
}

// conditions multiples ||
$pays="France";
if ($pays=="France" || $pays=="Belgique") {// si l'une des deux conditions est remplie on affiche le premoer message
    echo " Bienvenue ami francophone";
} else {
    echo " Sorry our site is only french speaking";
}
//condition multiple&
$langueParlee="français";
if ($pays=="France" && $langueParlee=="français") {//ici les deux conditions sont obligatoires
    echo " Bienvenue Baguette";
} else {
    echo " welcome cheesecake";
}
