<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Minichat</title>
</head>
<body>
    <form method='post' action='chatTraitementBis.php' align='center'>
    Pseudo <input type='text' name='pseudo'></br></br>
    <textarea rows="4" cols="50" name="message" ></textarea></br>
    <input  type="submit" name='envoi'>
  
</form>
<?php
try {
    $chat=new PDO('mysql:host=stagiaireonze; dbname=minichat;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('erreur:' .$e->getMessage());
}

//WHERE= où la chaine n'est pas vide texte AND pseudo . si l'un des deux est vide la bd n'est pas appelée et rien ne s'affiche
$recuperation=$chat->query("SELECT pseudo,texte FROM chat WHERE pseudo!='' AND texte!='' ORDER BY id DESC LIMIT 0,10");
while($donnees=$recuperation->fetch()){?>
   <p style='color:#F54C27' align='center'><?php echo $donnees['pseudo'].' : '?><span style='color:#159403'><?php echo $donnees['texte'].'</br>';?></span></p>
   <?php
}
?>


</body>
</html>