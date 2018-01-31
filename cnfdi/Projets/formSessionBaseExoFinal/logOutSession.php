<?php
session_start();
$_SESSION = array();
session_destroy();
print 'Fin de session.';
?>