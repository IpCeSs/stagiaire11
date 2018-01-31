<?php
try {
    $bdd= new PDO('mysql:host=localhost;dbname=testoc;charset=UTF8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
//On crée un autre objet qui va récupérer les infos de la bdd avcec un requete SQL
$reponse = $bdd->query('SELECT * FROM jeux_video');
//on ne peut pas afficher ce que la bdd nous envoie directement,
//on va créer un array qui comportera les infos $données et on lui donne la commande fetch()
//on fait une boucle pour parcourrir les entrées une à une si juste $donnee=$reponse->fetch() on aurait qu'une entrée
//on imbrique html et php pour afficher les données
while ($donnees=$reponse->fetch())

{
    ?>
    <p>
        <strong>Jeu</strong> :
        <?php echo $donnees['nom']; ?>
        <br /> Le possesseur de ce jeu est :
        <?php echo $donnees['possesseur']; ?>, et il le vend à
        <?php echo $donnees['prix']; ?> euros !
        <br /> Ce jeu fonctionne sur
        <?php echo $donnees['console']; ?> et on peut y jouer à
        <?php echo $donnees['nbre_joueurs_max']; ?> au maximum
        <br />
        <?php echo $donnees['possesseur']; ?> a laissé ces commentaires sur
        <?php echo $donnees['nom']; ?> :
        <em>
            <?php echo $donnees['commentaires']; ?>
        </em>
    </p>
    <?php
    }
    
    $reponse->closeCursor(); // Termine le traitement de la requête
    
    
?>