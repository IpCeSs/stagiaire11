<?php
$login=$_POST['Login'];
$password=$_POST['password'];
$basedonnees=mysqli_connect("127.0.0.1","root","","cnfdi");
$selectionTable="SELECT * FROM utilisateurs2 WHERE Login='$login'";
$resultat=mysqli_query($basedonnees,$selectionTable);
$donnees=mysqli_fetch_assoc($resultat);
if((mysqli_num_rows($resultat)>0)&&($password == $donnees['passwd'])){
session_start();
	$_SESSION['login']=$donnees['login'];
	$_SESSION['age']=$donnees['age'];
	$_SESSION['sexe']=$donnees['sexe'];
	$_SESSION['codePostal']=$donnees['codePostal'];
	$_SESSION['ville']=$donnees['ville'];
	$_SESSION['region']=$donnees['region'];
print 'Le login est : ' .$_SESSION['login'];
print '<br/><br/><a href="DisSeBase.php">Afficher les informations personnelles</a>';}
else {
	print 'Les informations ne sont pas valides!';
	}
?>