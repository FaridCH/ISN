<?php

session_start();


$nom_de_la_base="ISN";
$nom_serveur_MYSQL="localhost";
$utilisateur="root";
$mot_de_passe="";
mysql_connect("$nom_serveur_MYSQL","$utilisateur","$mot_de_passe") or die("Echec connection au serveur");
mysql_select_db("$nom_de_la_base") or die("Echec connection a la base");

$id=$_POST["id"];

$requete_sql="INSERT INTO  `isn`.`commandes` (`id_commande` ,`id_compte` ,`detail_commande`) VALUES (NULL,  '4',  'qsfwscwxcw')";
$res=mysql_query("$requete_sql");

;

?>