<?php
//try et connection
try{
    $campus=new PDO('mysql:host=stagiaireOnze;dbname=campusnumerique;charset=utf8','root','');
}catch (Exception $e){
    die ('erreur:'.$e->getMessage());
}
?>
<h2 style="color:#009999" align="center">Voici les filles du campus et leurs affectations en entreprise</h2>
<?php
$Bddfilles=$campus->query("SELECT Nom, Prénom, Entreprise FROM stagiaires WHERE Genre='femme'");
while($filles=$Bddfilles->fetch()){
    if (!empty($filles['Entreprise'])) {//si on a une entreprise ! different de vide //si on a pas encore d'entreprise = différent?>
      <p align='center' style='color:#cc0000'><?php  echo $filles['Nom'].' '.$filles['Prénom']. ' : '.$filles['Entreprise'].'</br>'; ?></p>
  <?php  }else{?>
     <p align='center' style='color:#00cc99'>  <?php echo $filles['Nom'].' '.$filles['Prénom']. ' : N\'a pas encore trouvé chaussure à son pied...</br> ';?></p>
 <?php   }
}
$Bddfilles->closeCursor(); // Termine le traitement de la requête ATTENTION NE PAS OUBLIER
?>
<h2 style="color:#009999" align="center">Voici les garçons du campus et leurs affectations en entreprise</h2>
<?php
$BddGarcons=$campus->query("SELECT Nom, Prénom, Entreprise FROM stagiaires WHERE Genre='Homme'");
while($garcons=$BddGarcons->fetch()){
    if (!empty($garcons['Entreprise'])) {//si on a une entreprise ! different de vide //si on a pas encore d'entreprise = différent
        ?>
        <p align='center' style='color:#cc0000'> <?php echo $garcons['Nom'].' '.$garcons['Prénom']. ' : '.$garcons['Entreprise'].'</br>';?></p>
   <?php }else{
       ?><p align='center' style='color:#00cc99'><?php echo $garcons['Nom'].' '.$garcons['Prénom']. ' : N\'a pas encore trouvé chaussure à son pied...</br>';?></p>
  <?php  }
}
$BddGarcons->closeCursor(); // Termine le traitement de la requête ATTENTION NE PAS OUBLIER

?>