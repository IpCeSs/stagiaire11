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
    <?php
try {
    $blog=new PDO('mysql:host=stagiaireonze;dbname=tdblog;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('erreur:'.$e->getMessage());
}//récupérer les ids de billets pour afficher les commentaires correspondants
?>
        <h1 style='color:#F01951' align='center'>Commentaires</h1>
        <a href='blog.php'>Retour à la liste de billets</a>
        <div class="news">
            <?php
// Récupération du billet
$idS=$blog->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets WHERE id = ?');

$idS->execute(array($_GET['billet']));//on récupère les données mises dans l'URL du href de la page log.php

$donneesBillet = $idS->fetch();

?>


                <div class="news">

                    <h3>

                        <?php echo htmlspecialchars($donneesBillet['titre']); ?>

                        <em>le
                            <?php echo $donneesBillet['date_creation_fr']; ?>
                        </em>

                    </h3>
                    <p>
                        <?php

    echo htmlspecialchars($donneesBillet['contenu']);
    $idS->closeCursor();
    ?>

                    </p>

                </div>


                <h2>Commentaires</h2>


                <?php
// Récupération des commentaires
$req = $blog->prepare('SELECT auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_commentaire_fr FROM commentaires WHERE id_billet = ? ORDER BY date_commentaire');

$req->execute(array($_GET['billet']));


while ($donneesCom = $req->fetch()) {
    ?>

                    <p>

                        <?php echo htmlspecialchars($donneesComm['auteur']); ?> le
                        <?php echo $donneesComm['date_commentaire_fr']; ?>
                    </p>

                    <p>
                        <?php echo htmlspecialchars($donneesComm['commentaire']); ?>
                    </p>

                    <?php
} // Fin de la boucle des commentaires

$req->closeCursor();


?>
</body>

</html>