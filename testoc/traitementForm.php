<?php
//on récupèr les names des input comme variable et on récupère grâce à $_POST
echo htmlspecialchars('Bienvenue '.$_POST['username'].' ton mot de passe est '.$_POST['pw']).'</br>';
/* pour le bouton d'option on doit définir un comportement selon le choix fait par l'uilisateur
salon les value de chaque input car les name des input sont les memes pour les deux boutons étant donné
qu'il sont liés (quand oui est coché on peut pas cocher non et inversement)
on fait donc un if*/
if ($_POST['frites']=='oui'){
echo "Moi aussi j'adore ça!!";
}else {
    echo "Vous avez raison c'est pas bon pour la santé";
}
//pour eviter que l'utilisateru ne mettre des balises dasn les champs on utilise htmlspecialchar()
//les balises seront alors traitées comme des caractères