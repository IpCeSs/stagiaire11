<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='blog.css'>
    <title>BLOG</title>
</head>

<body>
    <h1 style='color:#F01951' align='center'>Le BlOg TrOp BiEn !</h1>
   
   <?php
   try {
    $blog=new PDO('mysql:host=stagiaireonze;dbname=tdblog;charset=utf8', 'root', '');
}catch (Exception $e){
die('erreur:'.$e->getMessage());
}
$blogData=$blog->query('SELECT id,contenu,titre,DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY id DESC LIMIT 0,5');
while($billets=$blogData->fetch()){?>
 <h3 class="news"><?php echo htmlspecialchars($billets['titre']).' Le '.htmlspecialchars($billets['date_creation_fr']);?></h3>
    <div class="news">
        <p><?php echo $billets['contenu']?></p>
    </div>
    <!--chaque billet est suivi d'un lien vers la pagecommentaires.php qui transmet le numéro du billet dans l'URL 
    donc on récupérera de l'autre côté avec $_GET-->
   <div class="comment"> <a href="commentaires.php?billet=<?php $billets['id']; ?>">Commentaire</a> </div></br>
<?php
}


$blogData->closeCursor();


?>
</body>

</html>