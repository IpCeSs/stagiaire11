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
$blogData=$blog->query('SELECT * FROM billets');
while($billets=$blogData->fetch()){?>
 <h3 class="news"><?php echo $billets['titre'].' Le '.$billets['date_creation']?></h3>
    <div class="news">
        <p><?php echo $billets['contenu']?></p>
    </div>
   <div class="comment"> <a href="commentaires.php">Commentaire</a> </div></br>
<?php
}





?>
</body>

</html>