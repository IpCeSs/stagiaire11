<?php
//tester si bien connecter et savoir si erreur try (regarde s'il y a des erreurs) / catch (gère les erreurs)
try {
    //connection à la base testOC en PDO
    $bdd=new PDO('mysql:host=stagiaireOnze;dbname=testOC;charset=utf8', 'root', '');
}catch(Exception $e){
    die('erreur:'.$e->getMessage());
}?>

<!--on veut savoir quels jeux possède Florent
on ne veut pas que le <p> boucle donc on le met en dehors du while
while permet d'aller à chaque passage afficher les jeux de Florent-->
<p style="color:red"> Florent possède les jeux suivants :</p>
<?php $reponseFlo=$bdd->query("SELECT nom FROM jeux_video WHERE possesseur='Florent'");

while($jeuxFlo=$reponseFlo->fetch()){
 echo $jeuxFlo['nom'].'</br>';
    }
   
   $reponseFlo->closeCursor(); // Termine le traitement de la requête ATTENTION NE PAS OUBLIER
?>
 <p style="color:blue"> Patrick lui possède les jeux suivants</p>
 <?php $reponsePat=$bdd->query("SELECT nom FROM jeux_video WHERE possesseur='Patrick'");

while($jeuxPat=$reponsePat->fetch()){
 echo $jeuxPat['nom'].'</br>';

    }
   
    $reponsePat->closeCursor(); // Termine le traitement de la requête ATTENTION NE PAS OUBLIER
?>
 
