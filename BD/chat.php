<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Minichat</title>
</head>
<body>
    <form method='post' action='chatTraitement.php' align='center'>
    Pseudo <input type='text' name='pseudo'></br></br>
    <textarea rows="4" cols="50" name="message">Commencer à chatter</textarea></br>
    <input  type="submit" name='envoi'>
  
</form>
<?php include('chatTraitement.php');

//liste de messages à afficher
?>
<p><?php echo affichePseudo($pseudoData).' : '.afficheMessage($msgData).'</br>'; ?></p>



</body>
</html>