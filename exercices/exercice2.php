<?php
 $users =  json_decode(file_get_contents('data.json'));

//on crée la fonction qui reprend en parametre juste une ligne de $users soit $user
//cette fonction retourne juste l'email pas d'autre utilité
function getEmail($user)
{
    $email=$user->email;
    return $email;
}
//on fait un foreach qui va passer en revue toutes les lignes $user de $users
// et afficher la fonction crée getEmail
foreach ($users as $user) {
    echo getEmail($user).'</br>';
}

/*
Créer une fonction getEmail(). Cette fonction qui prend en parametre une ligne du tableau $users
doit retourner l'adresse email.

Résultat attendu: Pour chaque ligne du tableau $users la fonction appelée doit retourner l'adresse email.
*/
