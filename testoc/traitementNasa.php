<?php
// On définie la variable mot de passe imposée dans le TD
$password='kangourou';
//on vérifie que les champs ne soient pas vides soit différents =! de '' chaine vide
//on aurait pu utiliser la fonction empty()

if ($_POST['nom']!=''&& $_POST['pw']!='') {
    if ($_POST['pw']===$password) {
        echo 'You successfully entered The NASA Network!</br> The secret Code is BANANA </br>Be ready to conquer the world!!!';
    } else {
        echo 'The password doesn\'t match, NASA SWAT team is on its way';
    }
} else {
    echo 'WARNING you didn\'t fill all the blank fields.</br> The NASA police is coming for you';
}

