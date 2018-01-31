<table width="300" border="0" cellspacing="0" cellpadding="0">
<tr>
<td bgcolor="#C4BBBB">
<div align="center">
<font color="#030303" size="4" face="Arial">

<?php
$condition=($_POST['animal']);
if($condition=='chien')
{echo'M&eacutedor est un chien';}
else if($condition=='souris')
{echo 'M&eacutedor est une petite souris';}
else if($condition=='girafe')
{echo 'M&eacutedor est une girafe';}
else if($condition=='éléphant')
{echo 'M&eacutedor est un &eacutel&eacutephant';}
else
{echo 'Non,non,non M&eacutedor n\'est pas un(e)&nbsp'.$_POST['animal']. ', mais un chien!';}
?>

</div></td></tr></table>
<div><a href="medor.htm"> Retour </a></div></font>

