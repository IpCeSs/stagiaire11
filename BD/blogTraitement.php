<? header('location:blog.php');
try {
    $blog=new PDO('mysql:host=stagiaireonze;dbname=tdblog;charset=utf8', 'root', '');
}catch (Exception $e){
die('erreur:'.$e->getMessage());
}

