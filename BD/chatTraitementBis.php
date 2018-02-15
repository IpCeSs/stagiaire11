<?php 

try {
    $chat=new PDO('mysql:host=stagiaireonze; dbname=minichat;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('erreur:' .$e->getMessage());
}

//on met htmlspecialchars pour faire en sorte que le visiteru ne puisse pas 
//utiliser de balises html dasn ces champs
$pseudo=!empty($_POST['pseudo']) ? htmlspecialchars($_POST['pseudo']):'';
$message=!empty($_POST['message']) ? htmlspecialchars($_POST['message']):'';
// texte correcpond au nom du champ dans la table et massage au nom de l'input
$chatData=$chat->prepare('INSERT INTO chat(pseudo, texte) VALUES (:pseudo, :texte)');

    $chatData->execute(array(
    'pseudo'=>$pseudo,
    'texte'=>$message
));

//permet de renvoyer directement sur chat.php le visiteur ne verra jamais 
header('location:chat.php');

?>