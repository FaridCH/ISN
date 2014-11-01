<html>
	<head>
		<title> Inscription </title >
		<link rel="stylesheet" href="fichierCSS/style-entrecote.css" type="text/css"/>
</head>

<body>
<center>
<img src = "images/entrecote1.jpg"width="500" height="200"/> 
		<br/> <h3> Mulhouse </h3>
<header>
		</header>
		<section>
			<nav>
				<?php include'menu.php'; ?>
			</nav>
		</section>
		<form method="post" action="traitement.php">
 
   <fieldset>
       <legend>Inscription</legend> <!-- coordonnées --> 
		<p>
           Civilité:

           <input type="radio" name="Civilite" value="homme" id="homme" /> <label for="homme">Homme</label>
           <input type="radio" name="Civilite" value="femme" id="femme" /> <label for="femme">Femme</label>
           <input type="radio" name="Civilite" value="autre" id="autre" /> <label for="autre">Autre </label>
       </p>
	   
	   <p>
			<label for="nom">Quel est votre nom ?</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" name="nom" id="nom" />
	   </p>
	   <p>
			<label for="prenom">Quel est votre prénom ?</label> &nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" name="prenom" id="prenom" />
	   </p>
	    <p>
			<label for="prenom">Quel est votre pseudo ?</label> &nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" name="pseudo" id="prenom" />
	   </p>
	    <p>
			<label for="prenom"> Entrez le mot de passe ?</label> &nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="password" name="mdp" id="prenom" />
	   </p>
	   <p>
			<label for="email">Confirmez le mot de passe ?</label> 
			<input type="password" name="cmdp" id="prenom" />
	   </p>
	   <p>
			<label for="email">Quel est votre e-mail ?</label>&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="email" name="email" id="email" />
	   </p>
	   <p>
	        <label for="codepostal">Quel est votre code postal?</label>
			<input type="codepostal" name="codepostal" id="codepostal" />
	   </p>
	   <p>
	        <label for="codepostal">De quelle ville venez vous?</label>&nbsp
			<input type="text" name="ville" id="codepostal" />
	   </p>
	   <p>
       <input type="submit" name="Inscription" value="Inscription" />
	   </p>
	   <?php 
			if(isset($_GET["erreur"])){
				if($_GET["erreur"] == "cmdp" ) echo'<strong><font color="e5292c"> Erreur de confirmation de mot de passe !! </font></strong>';
			}				
		?>
		

   </fieldset>
 
</form>

<hr/>   <h6>  42 Avenue Robert Schuman, 68100 Mulhouse </br>
		telephone : 03 89 45 42 70 </h6>
	<a href="https://www.facebook.com/pages/LEntrec%C3%B4te-de-Mulhouse/276247055879410?ref=hl"/>
		<img src = "images/facebook.jpg"width="35" height="25"/>
		</center>
</body>
</html> 