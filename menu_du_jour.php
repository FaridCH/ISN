﻿<html>
	<head>
		<title> Menu du jour </title >
		<link rel="stylesheet" href="fichierCSS/style-entrecote.css" type="text/css"/>
</head>

<body>
<center >
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
		<hr/>   <h6>  42 Avenue Robert Schuman, 68100 Mulhouse </br>
		telephone : 03 89 45 42 70 </h6>
		<a href="https://www.facebook.com/pages/LEntrec%C3%B4te-de-Mulhouse/276247055879410?ref=hl"/>
		<img src = "images/facebook.jpg"width="35" height="25"/>
</body>
</html> 