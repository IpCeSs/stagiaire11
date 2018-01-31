<?php
if ($id=mysql_connect('127.0.0.1','Granval','2054')){
	if($id_db=mysql_select_db('Factures')){
	echo 'Vous êtes maintenant connecté à la base de données.';}

else {
	echo 'Echec de la connexion!';
}}
?>