<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='blog.css'>
    <title>Commentaires</title>
</head>
<body>
    
</body>
</html>
<?php
try {
    $blog=new PDO('mysql:host=stagiaireonze;dbname=tdblog;charset=utf8', 'root', '');
}catch (Exception $e){
die('erreur:'.$e->getMessage());
}//récupérer les ids de billets pour afficher les commentaires correspondants
?>
<h1 style='color:#F01951' align='center'>Commentaires</h1>
<a href='blog.php'>Retour à la liste de billets</a>
<div class="news">
        <p><?php echo $billets['contenu']?></p>
    </div>


