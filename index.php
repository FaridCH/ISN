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
<?php			
session_start();

$userName = "";
$idUser = "";

if(isset($_COOKIE['TestCookie']) && isset($_COOKIE['id'])){
$_SESSION['pseudo']=$_COOKIE['TestCookie'];
$_SESSION['id']=$_COOKIE['id'];
echo'<td> <a href="deconnect.php"><input type="button" class="mainoption" name="loginout" value ="Deconnexion"/> </a></td>';
echo'<p><font color="#fc5a68" size="5" >Bienvenue  <strong>'.$_SESSION['pseudo'].'</strong></font></p>';
}
else{
		if(!isset($_SESSION['pseudo']))
		{
			if(isset($_GET['user']) && isset($_GET['id']))
			{
				$_SESSION['pseudo']  = $_GET['user'];
				$_SESSION['id']  = $_GET['id'];	
				echo "l'id est : ".$_SESSION['ide'];				
			}
			echo'<td> <a href="connexionFormulaire.php"><input type="button" class="mainoption" name="login" value ="Connexion"/> </a></td>
				<td> <a href="inscription.php"><input type="button" class="mainoption" name="login" value ="Inscription"/> </a></td>';		
		}
		else{
			echo'<td> <a href="deconnect.php"><input type="button" class="mainoption" name="loginout" value ="Deconnexion"/> </a></td>';
			echo'<p><font color="#fc5a68" size="5"> Bienvenue  <strong>'.$_SESSION['pseudo'].'</strong></font></p>';
			
			if(isset($_GET['autologin'])){
				if($_GET['autologin'] == "on")	
				{
					setcookie('TestCookie', $_SESSION['pseudo'], time()+(365*24*3600));
					setcookie('id', $_GET['id'], time()+(365*24*3600));
				}
				else $_SESSION['id']  = $_GET['id'];	
			}
		}
}
    echo "l'id est : ".$_SESSION['id'];
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
		
<br/> <br/> <br/>
<hr/> 
<div id="menu">
<p>Un sympathique restaurant traditionnel implanté dans la cité du Bollwerk depuis plusieurs dizaines d'années.

Au premier abord, la proximité du tribunal de grande instance et de la prison semble peu sécurisante.<br/> Au final il n'en n'est rien, puisque la zone est calme, et doté de nombreuses places de stationnement non payantes aux heures des repas.</br> De plus, le restaurant siège dans une superbe et imposante bâtisse, qui tend à redonner de la couleur et de l'attrait à un quartier sous haute surveillance

Une fois à l'intérieur, on prend place dans l'une des deux salles aux couleurs chaudes, qui peuvent accueillir une centaine de clients. </p>
<br/>
<p> C'est sur le commentaire d'un client que nous décidons d'ouvrir le site notre site internet. Nous vous invitons, maintenant à entrer dans le monde de l'entrecôte ..</p>


        <div class="bloc">
        
       
      
                <div class="rouge"><a  href="flashThum/index.php"style="display:block;width:100%;height:100%;">Photos </a> </div>
                <div class="azur"><a  href="menu_du_jour.php"style="display:block;width:100%;height:100%;">Menus du jour </a> </div>
               
                <div class="retourLigne"></div>
                
                <div class="orange"><a  href="commandez_en_ligne.php"style="display:block;width:100%;height:100%;"> Commandez en ligne </a> </div>
                <div class="vert"> <a  href="avis_de_client.php"style="display:block;width:100%;height:100%;"> Avis de clients </a></div>
              
                
                <div class="retourLigne"></div>

        </div>
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