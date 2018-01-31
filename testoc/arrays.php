<?php
//on utilise la fonction array pour créer la variable tableau
//TABLEAU NUMEROTE
$prenoms=array('François','Jules','Jeanne', 'Paula','Eric');
//pour afficher un element on affiche son index[] attention array clé commence à 0
/*echo $prenoms[3].'</br>';*/
//parcourir tablea numeroté
for($index=0;$index<5;$index++)//on prend chaque numero d'index en commençant par 0 et index ne sera jms plus grand que 5
{
    echo $prenoms[$index].'</br>';
}

//TABLEAU ASSOCIATIF (avec étiquettes à la place de numéros)
$coordonnees=array(
    'prenom'=>'François',
    'nom'=>'Pignon',
    'adresse'=>'3, rue des Fleurs',
    'ville'=> 'Marseille');

    echo $coordonnees['prenom'].' '.$coordonnees['nom'].' '.$coordonnees['adresse'].' '.$coordonnees['ville'].'</br>';
//PARCOURIR TABLEAU ASSOCIATIF FOREACH
//foreach passe  en revue chaque element du tableau, et met chaque valeur dans une variable temporaire ici$element
foreach ($coordonnees as $element) {
    echo $element.'</br>';
}
//avec la boucle précédent on ne récupère que la valeur stockée dasn l'array, mais on peut
//aussi récupérer la clé avec le code comme suit
foreach ($coordonnees as $cle => $element) {
    echo $cle.' vaut '.$element.'</br>';
}
//on aura alors à l'écran prénom vaut françois nom vaut pignon etc..
// si on veut juste connaitre ce que contient l'array sans mise en forma spéciale on peut utiliser print_r
//mais print_r ne pred pas en charge les balises HTML il faut donc quand meme utiliser echo avec la balise <pre></pre>
//principalement utilisé pour débogage
echo '<pre>';
print_r ($coordonnees);
echo '</pre>';
// on a alors ceci qui s'affiche
/*Array
(
    [prenom] => François
    [nom] => Pignon
    [adresse] => 3, rue des Fleurs
    [ville] => Marseille
)*/
//RECHERCHER DANS UN TABLEAU
//verifier si une clé existe dans un tableau on fait un if array_key_exists
//qui nous renverra un boleen
if(array_key_exists('prenom',$coordonnees))
{
    echo 'la clé "prenom" se trouve dans coordonnées </br>';
}
// vérifier si une valeur existe dans un tableau on fait in_array
if(in_array('Jeanne',$prenoms)) {
    echo 'la valeur "Jeanne"est dans prenoms </br>';
}
// récupérer la clé d'une valeur avec array_search.renvoie false si pas de clé trouvé
$etiquette=array_search('François',$coordonnees);
echo 'François porte l\'étiquette '.$etiquette.' </br>';//vrai donc$etiquette affiche prenom
$position=array_search('Jean',$prenoms);
echo 'jean est en position '.$position;// retourne jean est en position mais sans $position car la valeur n'existe pas
?>