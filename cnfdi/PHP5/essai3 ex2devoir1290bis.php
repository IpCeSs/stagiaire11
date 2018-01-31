Devoir 1290bis.0313 exercice 2 (Script PHP actualisé pour la création du tableau)
<table width="500" border="1">
<tr>
<td>Id</td>
<td>Nom</td>
<td>Prénom</td>
<td>Age</td>
<td>Ville</td>
</tr>
<td>
<?php
$link= mysqli_connect("127.0.0.1","root","", "Devoir_cnfdi");
if(!$link){
	printf('Echec de la connection à la base: %s\n',mysqli_connect_error());
exit();
	}
	$req="SELECT Id FROM Eleves_cnfdi";
	$resultat=mysqli_query($link,$req);
	while($row=mysqli_fetch_array($resultat, MYSQLI_ASSOC)){
	printf("%s\n<br>",$row['Id']);}
mysqli_free_result($resultat);
mysqli_close($link);
?>
</td>
<td>
<?php
$link= mysqli_connect("127.0.0.1","root","", "Devoir_cnfdi");
if(!$link){
	printf('Echec de la connection à la base: %s\n',mysqli_connect_error());
exit();
	}
	$req="SELECT Nom FROM Eleves_cnfdi";
	$resultat=mysqli_query($link,$req);
	while($row=mysqli_fetch_array($resultat, MYSQLI_ASSOC)){		
	printf("%s\n<br>",$row['Nom']);}
mysqli_free_result($resultat);
mysqli_close($link);
?>
</td>
<td>
<?php
$link= mysqli_connect("127.0.0.1","root","", "Devoir_cnfdi");
if(!$link){
	printf('Echec de la connection à la base: %s\n',mysqli_connect_error());
exit();
	}
	$req="SELECT Prenom FROM Eleves_cnfdi";
	$resultat=mysqli_query($link,$req);
	while($row=mysqli_fetch_array($resultat, MYSQLI_ASSOC)){		
	printf("%s\n<br>",$row['Prenom']);}
mysqli_free_result($resultat);
mysqli_close($link);
?>
</td>
<td>
<?php
$link= mysqli_connect("127.0.0.1","root","", "Devoir_cnfdi");
if(!$link){
	printf('Echec de la connection à la base: %s\n',mysqli_connect_error());
exit();
	}
	$req="SELECT Age FROM Eleves_cnfdi";
	$resultat=mysqli_query($link,$req);
	while($row=mysqli_fetch_array($resultat, MYSQLI_ASSOC)){		
	printf("%s\n<br>",$row['Age']);}
mysqli_free_result($resultat);
mysqli_close($link);
?>
</td>

<td>
<?php
$link= mysqli_connect("127.0.0.1","root","", "Devoir_cnfdi");
if(!$link){
	printf('Echec de la connection à la base: %s\n',mysqli_connect_error());
exit();
	}
	$req="SELECT Ville FROM Eleves_cnfdi";
	$resultat=mysqli_query($link,$req);
	while($row=mysqli_fetch_array($resultat, MYSQLI_ASSOC)){		
	printf("%s\n<br>",$row['Ville']);}
mysqli_free_result($resultat);
mysqli_close($link);
?>
</td>				
</table>