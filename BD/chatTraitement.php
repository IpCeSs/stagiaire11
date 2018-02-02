<?php
try {
    $chat=new PDO('mysql:host=stagiaireonze; dbname=minichat;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('erreur:' .$e->getMessage());
}

//$pseudo=(!empty($_POST['pseudo']))?$_POST['pseudo']:'';
$pseudo=$chat->prepare('SELECT pseudo FROM chat WHERE id=? ORDER BY pseudo DESC LIMIT 0,10');
$pseudo->execute(array($_GET['pseudo']));

//$message=(!empty($_POST['message']))?$_POST['message']:'';
$message=$chat->prepare('SELECT message FROM chat WHERE id=? ORDER BY pseudo DESC LIMIT 0,10');
$message->execute(array($_GET['message']));

function affichePseudo($pseudoData)
{
  
    while ($pseudoData=$pseudo->fetch()) {
        echo $pseudoData['pseudo'];
        return $pseudoData;
    }
    $pseudo->closeCursor(); 
}
function afficheMessage($msgData){
    
    while($msgData=$message->fetch()){
        echo $msgData['message'];
        return $msgData;
    }
    $message->closeCursor(); 
}
// Puis rediriger vers minichat.php comme ceci :
//header('Location: chat.php');
