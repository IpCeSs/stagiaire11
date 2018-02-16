<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
<?php
//on include/joint le fichier de la class
include('Personnage.class.php');
include('Magicien.class.php');
include('Guerrier.class.php');
//on crée une instance/un objet de la class Personnage
$perso1=new \exoOC\Guerrier('Arnaud');


//on instancie à nouveau la class Personnage, on a donc 2 objets
$perso2=new \exoOC\Magicien('Cécilia');

//ici $this fait référence à $perso1/ $persoAFrapper fait référence à $perso2

$perso1->frapper($perso2);
$perso2->losePdv($perso1);



$perso2->frapper($perso1);
$perso1->losePdv($perso2);

