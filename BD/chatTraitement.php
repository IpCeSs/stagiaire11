<?php
try {
    $chat=new PDO('mysql:host=stagiaireonze; dbname=minichat;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('erreur:' .$e->getMessage());
}
$pseudo=(!empty($_POST['pseudo']))?$_POST['pseudo']:'';
$message=(!empty($_POST['message']))?$_POST['message']:'';

$chat->exec("INSERT INTO chat(pseudo, message) VALUES($pseudo, $message)");
$message=$chat->query('SELECT message FROM chat ORDER BY id DESC LIMIT 0,10');
$pseudo=$chat->query('SELECT pseudo FROM chat ORDER BY id DESC LIMIT 0,10');
function afficheMessage($msgData){
    while($msgData=$message->fetch()){
        echo $msgData['message'];
    }
    return $msgData;
}

function affichePseudo($pseudoData)
{
    while ($pseudoData=$pseudo->fetch()) {
        echo $pseudoData['pseudo'];
        return $pseudoData;
    }
}

// Puis rediriger vers minichat.php comme ceci :
header('Location: chat.php');
