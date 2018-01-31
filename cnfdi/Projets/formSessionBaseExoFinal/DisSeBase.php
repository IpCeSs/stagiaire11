<?php
session_start();
print 
'Login : '.$_SESSION['login'].'<br/>
Age : '.$_SESSION['age'].'<br/>
Sexe : ' .$_SESSION['sexe'].'<br/>
Code Postal : '.$_SESSION['codePostal'].'<br/>
Ville : '.$_SESSION['ville'].'<br/>
Région : '.$_SESSION['region'].'<br/>';
print'<br/><a href="logOutSession.php"> Clore la session </a>';
?>

