<?php
// On d�marre la session
session_start();

// On d�truit les variables de notre session
session_unset();

// On d�truit notre session
session_destroy ();

unset($_COOKIE['TestCookie']);
setcookie('TestCookie', null, -1);
unset($_COOKIE['id']);
setcookie('id', null, -1);

// On redirige le visiteur vers la page d'accueil
header("location:index.php");
?>