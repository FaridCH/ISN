<?php

session_start();

$nom_de_la_base="ISN";
$nom_serveur_MYSQL="localhost";
$utilisateur="root";
$mot_de_passe="";
mysql_connect("$nom_serveur_MYSQL","$utilisateur","$mot_de_passe") or die("Echec connection au serveur");
mysql_select_db("$nom_de_la_base") or die("Echec connection a la base");


$username=$_POST["username"];
$password=$_POST["password"];
if(isset($_POST['autologin'])){
	$autologin=$_POST["autologin"];
}
else $autologin="off";
$ide = 0;

$requete_sql="SELECT * FROM comptes";
$res=mysql_query("$requete_sql");
$i=0;
				
	while ($row = mysql_fetch_array($res)) 
	{
		$pseudo[$i]=$row["pseudo"];
		$mdp[$i]=$row["mdp"];
		$id[$i]=$row["id"];
		$i++;
	}
	for($i=0;$i<count($pseudo);$i++)
	{
		if((($pseudo[$i]) != $username ) || (($mdp[$i]) != $password )){ $ide = $id[$i]; header("location:connexionFormulaire.php?erreur=conFailled");}
		else 
		{
			$_SESSION['pseudo'] = $username;
			header("location:index.php?user=$username&autologin=$autologin&id=$ide");
		}
	}




?>