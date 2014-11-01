<!-- saved from url=(0013)about:internet -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Photo des plats</title>
<link rel="stylesheet" href="../fichierCSS/style-entrecote.css" type="text/css"/>
<script src="res/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body>
<center>
<img src = "../images/entrecote1.jpg"width="500" height="200"/> 
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
				<?php include'../menu.php'; ?>
			</nav>
		</section>
		
		</hr>
		<br/> <br/> <br/>
		
		<section id="slideshow">  
	
 <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0','width','100%','height','100%','src','res/play','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','res/play' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="100%" height="100%">
          <param name="movie" value="res/play.swf" />
          <param name="quality" value="high" />
          <embed src="res/play.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="100%" height="100%"></embed>
	  </object></noscript>
		</section>  


		</br></br></br></br></br></br></br></br></br>
<hr/>   <h6>  42 Avenue Robert Schuman, 68100 Mulhouse </br>
		telephone : 03 89 45 42 70 </h6>
	<a href="https://www.facebook.com/pages/LEntrec%C3%B4te-de-Mulhouse/276247055879410?ref=hl"/>
		<img src = "images/facebook.jpg"width="35" height="25"/>
		</center>
		
</body>
</html>
