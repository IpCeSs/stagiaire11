<?php
try {
    $chat=new PDO('mysql:host=stagiaireonze; dbname=minichat;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('erreur:' .$e->getMessage());
}
$pseudo=(!empty($_POST['pseudo']))?$_POST['pseudo']:'';
$message=(!empty($_POST['message']))?$_POST['message']:'';

$chat->exec("INSERT INTO chat(pseudo, message) VALUES($pseudo, $message)");



// Puis rediriger vers minichat.php comme ceci :
header('Location: chat.php');
