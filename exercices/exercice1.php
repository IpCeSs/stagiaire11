<?php

$users =  json_decode(file_get_contents('data.json'));

//on déclare les variables  à remplir
$males=[];
$females=[];


foreach ($users as $element) {
    //comme element correspond à un utilisateur de $users
    //on va directement chercher la propriété sur laquelle
    //on travaille ( gender) sur $element (-> correspond au . que l'on utilisait en js)
    if ($element->gender==='Female') {//si le genre est female
        array_push($females, $element);//on pousse l'utilisateur/élément dans la variable tableau $females crée avant
    } else {//sinon on push dans le tableau $males. le deuxièmre parametre est pushé dasn le tableau en premier parametre
        array_push($males, $element);
    }
}
//<pre>permet d'afficher les array crées par var_dump plus proprement
echo "<pre>";
var_dump($males, $females);
echo "<pre>";

//on utilise plus les triple egal car teste si meme type et meme valauer


/*
Parcourir le tableau $users.

Mettre tous les utilisateurs donc le gender est "male" dans un tableau,
et tous les gender "female" dans un autre tableau

Résultat attendu: $males, $females remplis.

var_dump($males, $females);
*/
