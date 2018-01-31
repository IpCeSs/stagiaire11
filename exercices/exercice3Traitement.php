<?php
/*
Créer un formulaire d'inscription avec les champs suivants en method POST :
- Nom
- Prenom
- Email

Vérifier que l'adresse email est bien conforme.
Si elle ne l'est pas, afficher un message d'erreur.

/!\ Penser à remettre les valeurs si il y a un message d'erreur.

Sinon afficher un message de succès, (ex: Bravo {Nom} {Prenom}. Nous avons bien enregistré votre adresse {email}}

Résultat attendu: 1 ou 2 fichiers php affichant le formulaire, si method = POST traiter les données, et afficher les erreurs.
*/
 

//ESSAI 1 OK

//on utilise la fonction filter_var(), qui filtre une variable avec un filtre spécifique ici validate email
//syntaxe : filter_var(var, filtername, options) >> var=la variable à filtrer / filtername spécifie le filtre à utiliser / options pas obligatoire
// //on récupère les infos du formulaire avec $_POST

// if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false){
//     echo 'Bravo'.$_POST['prenom'].$_POST['nom'].' nous avons bien enregistré votre adresse Email';
// }else{
//     echo 'Désolé '. $_POST['prenom'].$_POST['nom'].' le format de votre email n\'est pas valide';
// }



//ESSAI 2
// On utilise filter_input() qui est mieux adapté aux formulaires
// Filter_input a trois parametres obligatoires la méthode pour recupérer input_post, la variable (sans $_post puisque défini au param précédent)
//et le filtre à utiliser ici filter_validate_email

if (filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
    echo 'Bravo '.$_POST['prenom'].' '.$_POST['nom'].' nous avons bien enregistré votre adresse Email';
} else {
    echo 'Désolé '. $_POST['prenom'].$_POST['nom'].' le format de votre email n\'est pas valide';
}
