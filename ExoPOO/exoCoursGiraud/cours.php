<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<br>
<h1>Travail sur les classes POO</h1>
<?php
//On inclus le fichier qui contient nos classes
include('humain.interface.php');
include('moi.class.php');
//on ajoute une nouvelle instance à Humain, qu'il faut stocker dans une variable afin
//de pouvoir la manipuler et y accéder
$cecilia = new moi();
//jean ne peut plus faire appele à humain vu que humain est abstract,
//on ne peut plus y accéder directement
//$jean=new humain('jean');
$arnaud = new moi('');

//on ajoute de s valeurs à la variable publique $nom de la classe
//$cecilia->nom='Cécilia';
//$arnaud->nom='Arnaud';*/

//autre exemple, on applle les functions crées (nb. $nom est passé
//en private donc inutilisable seul ici
//on set le nom
//$cecilia->setNom('Cécilia');
$cecilia->setAdresse('33 rue des Fleurs', 'Annecy', '74000');
//on crée une fonction qui con,tioent mla class humain
$classeHumain = 'Humain';
//on recupere le nom
//echo $cecilia->getNom() . '<br>';
//echo $cecilia->getSalaire(22) . '€</br>';
echo $cecilia->getAdresse() . '</br>';
//echo 'Crée le ' . $cecilia->getDateInscrit() . '<br>';
//$arnaud->setNom('Arnaud');
//on recupere le nom
//echo $arnaud->getNom();
//echo '<br>' . $arnaud->getNom() . '<br>';
//echo $arnaud->getSalaire(35) . '€ </br>';
//echo 'Crée le ' . $arnaud->getDateInscrit() . '<br>';

//on retourne la valeur objcrees grace à la fct static
//echo 'nb objets crées:' . $classeHumain::totalObjCrees();
?>
</body>
</html>