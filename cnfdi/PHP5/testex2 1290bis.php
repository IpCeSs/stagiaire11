<table width="200" border="1">
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Age</th>
                    <th>Ville</th>
                   
                </tr>
				<?php
$link= mysqli_connect("127.0.0.1","root","", "devoir_cnfdi");


	
	$resultat=mysqli_query($link,"SELECT * FROM eleves_cnfdi");
	while($row=mysqli_fetch_array($resultat, MYSQLI_ASSOC)){ ?>
            
                <tr>
                    <td><?php echo $row=['Id'];?></td>
                    <td><?php echo $row=['Nom'];?></td>
                    <td><?php echo $row=['Prenom'];?></td>
                    <td><?php echo $row=['Age'];?></td>
                    <td><?php echo $row=['Ville'];?></td>
                </tr>
				
		  <?php } mysqli_close($link);
?>
</table>