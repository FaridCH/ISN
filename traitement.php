<?php

$nom_de_la_base="ISN";
$nom_serveur_MYSQL="localhost";
$utilisateur="root";
$mot_de_passe="";
mysql_connect("$nom_serveur_MYSQL","$utilisateur","$mot_de_passe") or die("Echec connection au serveur");
mysql_select_db("$nom_de_la_base") or die("Echec connection a la base");

	$civilite=$_POST["Civilite"];
	$nom=$_POST["nom"];
	$prenom=$_POST["prenom"];
	$pseudo=$_POST["pseudo"];
	$mdp=$_POST["mdp"];
	$cmdp=$_POST["cmdp"];
	$email=$_POST["email"];
	$codepostal=$_POST["codepostal"];
	$ville=$_POST["ville"];
	
	if($mdp == $cmdp) 
	{
		$requete_sql="INSERT INTO `ISN`.`comptes` (`id`, `civilite`, `nom`, `prenom`, `pseudo`, `mdp`, `cmdp`, `email`, `codepostale`, `ville`) VALUES (NULL, '$civilite', '$nom', '$prenom', '$pseudo', '$mdp', '$cmdp', '$email', '$codepostal', '$ville')";
		mysql_query("$requete_sql");
		header("location:index.php");
	}
	else
	{
		header("location:inscription.php?erreur=cmdp");
	}


?>