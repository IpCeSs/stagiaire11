<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Envoi de documents/UPLOAD</title>
</head>
<body>
<form action="traitementEnvoi.php" method="POST" enctype="multipart/form-data">
<!--enctype permet d'indiquer au navigateru de l'utilisateur qu'il va traiter de l'envoi de données-->
<!--on met un input qui permet le transfert de fichiers-->
<input type="file" name="monFichier"><br>
<input type='submit' name='submit' value="envoyer le fichier">
</form>
    
</body>
</html>