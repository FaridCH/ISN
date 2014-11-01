<html>
	<head>
		<title> Le Site Officiel de l'Entrecôte de Mulhouse </title >
		<link rel="stylesheet" href="fichierCSS/style-entrecote.css" type="text/css"/>
</head>

<body>
<center>
<div>
<img src = "images/entrecote1.jpg"width="500" height="200"/> 
		 <h4> Mulhouse </h4>
</div>

<div>
		<hr>
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
<tr>
<td class="row1" align="right">

<table border="0" cellspacing="0" cellpadding="2">
<tr>
<td> <a href="connexionFormulaire.php"><input type="button" class="mainoption" name="login" value ="Connexion"/> </a></td>
<td> <a href="inscription.php"><input type="button" class="mainoption" name="login" value ="Inscription"/> </a></td>
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
<br/> <br/> <br/>
<hr/> 
<div id="menu">

<form action="connexion.php" method="POST" >
<td class="gensmall">Pseudo: </td>
<td><input class="post" type="text" name="username" size="10" /></td>
<td class="gensmall">   Mot de passe:</td>
<td><input class="post" type="password" name="password" size="10" maxlength="32" /></td>
<td class="gensmall">   connectez-moi à chaque visite </td>
<td><input class="text" type="checkbox" name="autologin" /></td>
<td>  <input type="submit" class="mainoption" name="login" value="Connexion" /></td>
</form>

<?php
if(isset($_GET["erreur"]))
{
	if($_GET["erreur"] == "conFailled") echo'<strong><font color="e5292c"> Erreur d indentifiant ou de mot de passe !! </font></strong>';
}
?>
		</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
		 <!--BOUTON J'AIME DE FACEBOOK-->          
<iframe src="http://wellstyled.com/tools/colorscheme2/index-en.html&amp;layout=standard&amp;show_faces=false&amp;width=400&amp;action=like&amp;colorscheme=light&amp;height=24" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:400px; height:24px;" allowTransparency="true"></iframe> 
		<hr/>   <h6>  42 Avenue Robert Schuman, 68100 Mulhouse </br>
		telephone : 03 89 45 42 70 </h6>
		<a href="https://www.facebook.com/pages/LEntrec%C3%B4te-de-Mulhouse/276247055879410?ref=hl"/>
		<img src = "images/facebook.jpg"width="35" height="25"/>
		
		
		</center>
		
</body>
</html> 




