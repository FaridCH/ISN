<html>
	<head>
		<title> Commandez en ligne </title >
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
	<?php
	if(!isset($_SESSION['pseudo'])){
		echo' <br><br><br> Veuillez vous connecter pour effectuer une commande <td> <a href="connexionFormulaire.php"><input type="button" class="mainoption" name="login" value ="Connexion"/> </a></td>
			<br> <br> ou inscrivez vous si vous avez pas encore un compte <td> <a href="inscription.php"><input type="button" class="mainoption" name="login" value ="Inscription"/> </a></td>';		
	}
	else
	{
		?>
	<fieldset>
		<legend>Votre commande</legend> <!-- commande --> 
			<form method="post" action="commander.php">
				  <table width="300">
				  <tr>
					  <td><label>
					   <center><p> <strong> Les menus PIZZA <strong></p> </center>
						</label></td>
					</tr>
					<tr>
					  <td><label>
						<input type="checkbox" name="pizza" value="bouton radio" />
						La marguerite</label></td>
					</tr>
					<tr>
					  <td><label>
						<input type="checkbox" name="pizza" value="bouton radio" />
						La pizza Napolitaine</label></td>
					</tr>
					<tr>
					  <td><label>
						<input type="checkbox" name="pizza" value="bouton radio" />
						La pizza Reine</label></td>
					</tr>
					<tr>
					  <td><label>
						<input type="checkbox" name="pizza" value="bouton radio" />
						BLa 4 Saisons</label></td>
					</tr>
					<tr>
					  <td><label>
						<input type="checkbox" name="pizza" value="bouton radio" />
						La paysanne</label></td>
					</tr>
					<tr>
					  <td><label>
						<input type="checkbox" name="pizza" value="bouton radio" />
						Aux 4 Frommage</label></td>
					</tr>
					<tr>
					  <td><label>
						<input type="checkbox" name="pizza" value="bouton radio" />
						L'Océane aux Scampis</label></td>
					</tr>
					<tr>
					  <td><label>
						<input type="checkbox" name="pizza" value="bouton radio" />
						La paysanne</label></td>
					</tr>
					<tr><td></td></tr><tr><td></td></tr>
					<tr>
					  <td><label>
					 <center> <p> <strong> Les salades <strong></p> </center>
						</label></td>
					</tr>
					<tr>
					  <td><label>
						<input type="checkbox" name="salades" value="bouton radio" />
						La salade Paysanne</label></td>
					</tr>
					<tr>
					  <td>
						<input type="checkbox" name="salades" value="bouton radio" />
						La salade de Pot-au-feu à l'ancienne </td>
					</tr>
					<tr>
					  <td><label>
						<input type="checkbox" name="salades" value="bouton radio" />
						La salade au foies de volailles</label></td>
					</tr>
					<tr>
					  <td><label>
						<input type="checkbox" name="salades" value="bouton radio" />
						Le Saumon mariné par nos soins</label></td>
					</tr>
				  </table><br>
				  <?php echo'<input type="hidden" name="id" value="'.$_SESSION['id'].'"/>'; ?>
				  <input type="submit" value="Commander"/>
			</form>
	</fieldset>
		
		
 
	<?php	
	}
		if(isset($_SESSION['id'])) echo "L'id est : ".$_SESSION['id'];
		else echo "L'id est : Makainch l id noude fine tn3asse !! ";
	?>	
	

<hr/>   <h6>  42 Avenue Robert Schuman, 68100 Mulhouse </br>
		telephone : 03 89 45 42 70 </h6>
	<a href="https://www.facebook.com/pages/LEntrec%C3%B4te-de-Mulhouse/276247055879410?ref=hl"/>
		<img src = "images/facebook.jpg"width="35" height="25"/>
		</center>
</body>
</html> 