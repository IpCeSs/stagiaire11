<table width="300" border="1">
<tr>
<td>Id</td>
<td>Nom</td>
<td>Prenom</td>
<td>Age</td>
<td>Ville</td>


<tr>

<?php
$link= mysqli_connect("127.0.0.1","root","", "devoir_cnfdi");

if(!$link){
	printf('Echec de la connection à la base: %s\n',mysqli_connect_error());
exit();
	}
	$req="SELECT Ville FROM eleves_cnfdi";
	$resultat=mysqli_query($link,$req);
	while($row=mysqli_fetch_array($resultat, MYSQLI_ASSOC)){
		

	printf("%s\n<br>",$row['Ville']);}
mysqli_free_result($resultat);
mysqli_close($link);
?>

</table>