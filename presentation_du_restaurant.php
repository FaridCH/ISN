<html>
	<head>
		<title> Présentation </title >
		<link rel="stylesheet" href="fichierCSS/style-entrecote.css" type="text/css"/>
</head>

<body>
<center>
<img src = "images/entrecote1.jpg"width="500" height="200"/> 
		<br/> <h3> Mulhouse </h3>
		
<div>
		<hr>
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
<tr>
<td class="row1" align="right">

<table border="0" cellspacing="0" cellpadding="2">
<tr>
<?php			
	session_start();
		if(!isset($_SESSION['pseudo']))
		{
			if(isset($_GET['user']))	$_SESSION['pseudo']  = $_GET['user'];
				echo'<td> <a href="connexionFormulaire.php"><input type="button" class="mainoption" name="login" value ="Connexion"/> </a></td>
				<td> <a href="inscription.php"><input type="button" class="mainoption" name="login" value ="Inscription"/> </a></td>';		
		}
		else{
		echo'<td> <a href="deconnect.php"><input type="button" class="mainoption" name="loginout" value ="Deconnexion"/> </a></td>';
		echo'<p><font color="#fc5a68" size="5" >Bienvenue  <strong>'.$_SESSION['pseudo'].'</strong></font></p>';
	}
				
?>

</tr>
</table></td>
</tr>
</table>
</div>
<header>
		</header>
		<section>
			<nav>
				<?php include'menu.php'; ?>
			</nav>
		</section>
		<br/><br/>
			<hr/>
			<p> L'entrecôte ouvert en propose depuis toujours des plats à prix abordables.<br/>
			    Nous vous accueillons dans un cadre des plus chaleureux d'une brasserie parisienne. Nos <br/>
				deux salles climatisées peuvent contenir jusqu'à personnes. Une terrasse est mise à votre <br/>
				disposition pour les beaux jours où vous pouvez déguster nos moules en carte de saison. Nous <br/> 
				acceptons bien entendu vos animaux. Venez découvrir chaque jour nos nouvelles ardoises.<br/>
				****<br/> </p>
				<p>Plongé dans le centre de la ville de Mulhouse le restaurant est proche de tous les transports en <br/>
				communs *. Sa situation est propice à vos loisirs : Kinépolis, Golfy, Laser Game... Notre restaurant <br/>
				est à proximité du parc des expositions, du Palais des Sports... <br/>
				**** <br/></p>
				<p>Notre restaurant a été élu Restaurant de l'Année en 2013 / 2014 pour la 5ème année consécutive par <br/> 
				la Chambre de Commerce et d'Industrie. nous disposons également du label apprenti.<br/>
				****<br/></p>
				<p>Nos serveurs peuvent vous parlez dans de diverses langues telles que l'allemand, l'anglais, l'italien <br/>
				ou encore l'espagnol. <br/>
				****<br/> </p>
				<p> Vous voulez passer du bon temps avec votre compagnon, entre amis ou encore avec votre famile.<br/>
				Alors n'hésitez plus et prenez votre téléphone pour réserver votre table.
				</p>
			   <img src="images/estrade1.jpeg"  width="300" height="200" />  
			   <img src="images/restaurant.jpg"  width="300" height="200" />  
			   <img src="images/salle_arriere.jpeg" width="300" height="200" />  
			 <h5> * Tram 2 et les lignes de bus 15 et 16.</h5>
			<hr/>   <h6>  42 Avenue Robert Schuman, 68100 Mulhouse </br>
		telephone : 03 89 45 42 70 </h6>
			<a href="https://www.facebook.com/pages/LEntrec%C3%B4te-de-Mulhouse/276247055879410?ref=hl"/>
		<img src = "images/facebook.jpg"width="35" height="25"/>
	
</body>
</html> 