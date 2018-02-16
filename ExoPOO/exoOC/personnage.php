<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
<?php
//on include/joint le fichier de la class
include('Personnage.class.php');
//on crée une instance/un objet de la class Personnage
$perso1=new Personnage('Arnaud');
//$perso1->parler();
//on instancie à nouveau la class Personnage, on a donc 2 objets
$perso2=new Personnage('Cécilia');
//ici $this fait référence à $perso1/ $persoAFrapper fait référence à $perso2
$perso1->frapper($perso2);
$perso1->gagnerExperience();
$perso1->afficherExperience();

$perso2->frapper($perso1);
$perso2->gagnerExperience();
$perso2->afficherExperience();

