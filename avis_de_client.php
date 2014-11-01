<html>
	<head>
		<title> Avis de client </title >
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
<h4> “Un excellent bistrot qui mérite son nom!! ” </h4> <br/>
<p>Il ne faut pas confondre un restaurant et une bistrot. Je pense que l'entrecote mérite sa place a Mulhouse.<br/>
L'ambiance est assurée : un bar pour boire un coup, des plats du jour et des vins au pichet étonnants et gouteux.<br/> 
Le personnel y est efficace et pro. Les prix sont très accessibles.<br/>
Nous sortons toujours enchantés, pour une note plus que raisonnable. <br/>
Un bistrot du coin pour bien manger et vivre une soirée sans chichi! <br/>
Petite plus : plats, pizza et tarte flambée à emporter. Tres pratique les soirs de faineantise. </p>
<br/> <br/>
<hr/> 
<h4> “Ambiance chaleureuse” </h4> <br/>
<p> Je n'y suis allé qu'une fois, mais j'y retournerai assurément. Qualité de la viande et quantité : le paradis du grand mangeur. </p>
<br/> <br/>
<hr/> 
<h4>“Restaurant digne de son nom !” </h4> <br/>
<p> Dîner du 17/2/2014. De retour dans ce restaurant après de longs mois d'absences, nous y sommes retournés ce soir <br/>
du 17/2. Accueil de Monique toujours aussi chaleureux. Choix nombreux, mais option "entrecôte"... Superbe qualité de viande,<br/>
 grillée comme demandée, très bonne sauce au roquefort (avis idem de mon ancien boss qui m'accompagnait...). Jean-Marc est toujours<br/>
 aussi sympathique et prêt à satisfaire les désirs de ses clients (dans la mesure du possible, bien entendu...). Jérémy a toujours <br/>
 sa voix "d'aéroport" (il a loupé sa vocation !), et ses irish coffee sont excellents... Une petite déception ce soir là : l'absence<br/> 
 de José "l'ancien" (en congé) qui a toujours été ce que l'on peut trouver de plus cordial et professionnel dans ce genre de restaurant, <br/>
 n'en déplaise aux donneurs de leçons. Bref ! excellents moments d'assurés, viande de haut niveau que l'on aimerait trouver aussi bonne <br/>
 dans certains étoilés, et adresse à recommander chaudement ! Ce soir là, même d'anciens salariés sont revenus à l'Entrecôte.</p>
 <br/> <br/>
 <hr/> 
 <h4>“Superrrr” </h4> <br/>
<p> Une cuisine toujours excellente avec une belle variété de bons produits, le cadre est joli, et bien sur il y a une belle équipe <br/>
 toujours très accueillante, souriante, ce qui donne un côté chalereux au restaurant. Je recommande fortement ce restaurant, il a de bons<br/>
 critères à tous les niveaux !! </p>
 <br/> <br/>
 <hr/> 
 <h4> “agreable découverte” </h4> <br/>
 <p> Restaurant découvert au hasard , accueil très sympathique malgré que nous n'avions pas réservé , apéritif offert par la maison en attendant<br/>
 d'avoir une table , salle chaleureuse , service rapide , serveurs très professionnels et les plats que nous avions choisis très bon et pas cher !<br/> 
"café offert merci au patron ". restaurant à ne pas rater rapport qualité /prix excellent !!</p>
<br/> <br/> 
<hr/> 
<h4> “Bon ptit resto” </h4> <br/>
<p> Hier soir avec mon pote on a été a l entrecôte. Accueil tres sympa ou l apero maison est offert ainsi qu'une salade verte. Joues de lotte <br/>
excellentes accompagnées de légumes à l ancienne et pommes vapeurs. Suivi d'une crème brûlée .très bonne suggestion des vins. <br/>
Serveuse très sympa .<br/> <br/>
On y retournera. Car en plus les prix ne sont pas très chers du tout.</p>
<br/> <br/> 
<hr/> 
<h4> “Pour passer un bon moment entre amis autour d'une bonne table.” </h4> <br/>
<p>Nous avons apprécier durant trois soirs de suite, la qualité de l'accueil, un service efficace et aimable et des mets avec une carte renouvelée<br/>
 chaque jour, allant des spécialités alsaciennes aux classiques entrecôtes, bien cuisinés et bien garnis.<br/>
Rendez-vous d'amis, donc animé par les convives mais chaleureux. Réservation nécessaire !<br/>
Le personnel très sollicité reste patient et courtois </p>
<br/> <br/>
<hr/> 
<h4> “Famille, couples, local” </h4> <br/>
<p> Cela fait des années que j'y vais régulièrement avec plaisir, les enfants ont droit à un cadeau, le repas est toujours bon, et à un tarif défiant <br/>
 toute concurrence. Les Mulhousiens ne s'y trompent pas et viennent souvent en famille pour des évènements à fêter. Je recommande sans modération  <br/>
 ceux qui veulent manger à un bon rapport qualité-prix.</p>
 <br/> <br/>
 <hr/> 
 <h4> “FAMEUSE ENTRECOTE” </h4> <br/>
 <p> Depuis plus de 7 ans je fréquente ce restaurant. Les habitués sont fort nombreux, donc quotidiennement satisfaits cqfd ! Gino n'avait pas son <br/>
 pareil pour accueillir les gens avant qu'il n'ouvre l'Escalope à Mulhouse. Le beau-frère Jean-Marc le remplace fort bien, et la cohorte de serveurs <br/>
 et serveuses sont absolument à la hauteur ! </p>
 <br/> <br/>
 <hr/> 
 <h4>“Bonne adresse” </h4> <br/>
<p> Nous sommes des habitués de ce restaurant depuis quelques années nous avons également fêté mes 70 ans rien à redire toujours le même accueil très <br/>
chaleureux , style brasserie, très propre , une carte très variée,des prix très corrects nous permettant de passer de belles soirées! <br/>
Félicitations pour l'apéro offert régulièrement., et cerise sur le gâteau ouvert tous les jours!<br/>
A recommander sans hésiter. </p>
<br/> <br/>
 <hr/> 
<h4>“Une adresse où on a plaisir à revenir” </h4> <br/>

J'ai découvert ce restaurant il y a maintenant deux ans et demi car il est tout proche de mon domicile. Depuis j'y retourne très régulièrement avec <br/>
ma famille. Le restaurant comporte deux vastes salles vaste l'été il y a moyen de manger dehors sur la terrasse, ce qui est toujours appréciable. <br/>
La carte du restaurant est très variée et, jusqu'à présent, je n'ai jamais été déçu par les plats. <br/> 
J'ai toujours été très bien accueilli et le service est toujours très efficace. <br/>
La bonne surprise arrive avec l'addition et, vu le nombre de clients habitués, je ne suis pas le seul à m'être rendu compte qu'à cette adresse on <br/> 
peut manger très bien pour un prix tout à fait correct. </p>
<br/> <br/>
<hr/> 
<h4> “UNE ADRESSE INCONTOURNABLE A MULHOUSE” </h4> <br/>
<p> Mon coup de coeur à Mulhouse. Ouvert 7/7. Super accueil par Gino le patron et toute son équipe. La cuisine est bonne et très correcte pour des prix <br/>
 raisonnables. C est une adresse "sure" pour preuve une clientèle fidèle, régulière et nombreuse. Il est préférable de réserver si on veut y aller le <br/>
 week end. </p>
 <br/> <br/>
 <hr/> 
 <h4>“Un des meilleurs restaurants de Mulhouse” </h4> <br/>
<p> Malgré son emplacement peu reluisant face à la maison d'arrêt de Mulhouse, ce restaurant est certainement l'un des meilleurs de la ville.<br/>
Pensez à réserver surtout pour vendredi soir et le weekend .<br/>
Le service est y est souriant, aimable et rapide.<br/>
La carte proposée est bien étoffée et les plats sont savoureux et copieux. Mention particulière pour l'entrecôte bien sûr.<br/>
Les vins proposés sont également de bonne qualité et pas trop chers.<br/>
Le rapport qualité prix est excellent.<br/>
Seul bémol, peut être un peu bruyant lorsque la salle est bondée, et c'est souvent le cas, mais n'y reconnaît-on pas la marque des bons restaurants ?<br/>
Une adresse à tester les yeux fermés.</p>
<br/> <br/>
<hr/> 
<h4>“Rapidité et efficacité Bon resto à viande” </h4> <br/>
<p>Une adresse idéale pour manger vite et pas cher.La brasserie est née d un concept parisien bien rodé importé en Alsace.On vient ici pour la viande  <br/>
essentiellement c est aussi une des rares adresses ou l on peut manger tard.Les patrons règnent en maitres sur la salle et rien ne leur échappe. <br/>
Les tartes flambées et carpes frites y sont aussi bonnes.La qualité est régulière sauf si la viande n est pas tout a fait de la meilleure qualité <br/>
 (ce qui est rare)La viande s achète au meilleur court comme à la bourse ce qui se comprend vu du débit important de cette usine à steack.Bravo à <br/>
 cette èquipe qui montre que l on peut faire de la quantité en gardant la qualité.Réservez car il y a du monde </p>
 <br/> <br/>
 <hr/> 
 <h4> “Quel service professionel” </h4> <br/>
 <p> Pour moi le service était excellent, très rapide. Les serveurs sont des grands professionnels. Ils sont tous gentils et très souriant. Les serveurs <br/>
 nous accueillent chaleureusement. La cuisine est très bonne la première fois que je suis venu c'était l'anniversaire de mon meilleur ami et ils sont venus <br/>
 avec le vacherin et la musique .</p>
 <br/> <br/>
 <hr/> 
 <h4> “Très bon restaurant. typiquement français !” </h4> <br/> 
<p> Ma famille et moi avons déjeuné dans ce restaurant à deux reprises pendant les vacances, et nous avons été très contents chaque fois. <br/>
Le restaurant n'est pas dans la partie très jolie de Mulhouse. En fait, il se trouve juste en face d'une prison. Cependant, cela vaut la peine de <br/>
s'arrêter. Vous trouverez ce restaurant car vous entrez dans Mulhouse en voiture en venant de Bâle. L'extérieur avait l'air sympa et nous a convaincu <br/>
de jeter un coup d'œil.<br/>
Lors de notre première visite, nous n'avons pas eu une réservation. Le monsieur qui nous a accueillis nous a dit qu'une table devrait être disponible <br/> 
sous peu. Il était très gentil et nous a demandé d'attendre pendant que nous offrant un Kir, qui était très agréable. Pour notre deuxième visite, j'ai <br/>
fait une réservation. <br/>
Le menu est typiquement français, avec quelques spécialités de l'Alsace. Vous trouver quoi que ce soit de moules marinières (moules cuites au vin blanc),<br/>
 Entrecôte (bien sûr) cuit dans une sauce morille, veau, de l'agneau, et beaucoup plus. Ils ont toujours des prix spéciaux, qui sont très agréables, et <br/>
 à un prix très bien, inférieur à celui des éléments de menu. Nous avons choisi de les promotions sur les deux occasions. <br/>
La qualité de la nourriture est exactement ce qu'on attend d'un restaurant français. Je n'ai aucune plainte à formuler. Nous avons partagé des <br/> Profiterolles pour le dessert ( une pate de génoises choux rempli avec de la glace, couvert de sauce) de chocolat ... c'était super.
Dans l'ensemble, si vous êtes à Mulhouse et si vous êtes d'humeur pour un bon repas français, n'hésitez pas, vous ne serez pas déçu. Amusez-vous bien !<br/>
Traduit de l'anglais </p>
<br/> <br/>
<hr/> 
<h4>“In need for easy food just over the border from Basel?” </h4> <br/>
<p> L'Entrecote is a French bistro in Mullhouse and very nicely priced. The inside matches the price list; but the food definitely beats the price list. <br/>
For similar food you'll pay more than double 20 km to the east (Switzerland). No wonder I could hear some Swiss German around me.<br/>
The restaurant offers some typical Elsas/Alsace dishes, quite some meat dishes as well as the typical French things. Combine that with some good priced <br/>
wine and you will have your easy dinner. <br/>
If you want classy or top-design in your restaurant, go somewhere else. But if you want well priced food in a relaxed and kind environment: then remember <br/>
this place in Mullhouse. If I am hungry on my way home to Switzerland and Mullhouse is on my route; I will probably stop here again.</p>
<br/> <br/>
<hr/> 
<h4> “True French Cuisine in Alsace” </h4> <br/>
Living close to the French border, Alsace is the nearest access to France. The only drawback is that the restaurants, for the most part, are similar with <br/>
respect to cuisine. There is no problem with Alsatian food, but one pines for the "true" taste of France, even this close to the Swiss border. L'Entrecote <br/>
 delivers in spades.<br/>
The place is large enough to accommodate hungry Francophile gourmands on Sunday when most other eateries are only serving Flammkuchen, the Alsatian version <br/>
of a French pizza, or choucroute, which is a weighty dish consisting of sausages, ham, other smoked meats, and kraut.<br/>
Enter this place, with creative fish dishes (Gateau d' poisson, Salmon, Dorade, Paves of fish and beef, Gigot d'Agneau, Civet d'lievre, etc). The namesake <br/> 
Grillade of Entrecote is marvelous. The entree of Soupe d'Poisson with all the sauces, cheese, and croutons is a killer. Salads are wonderful. If you like <br/>
 moules, you can get a huge serviing for about EUR 13-16 that will keep you happy and warm.<br/>
You are welcomed with a glass of local rose wine and the wine card covers Alsace, Rhone, Bordeaux, Borgogne, Langedoc, Bordelais, Graves, etc. Finish up with<br/>
 Calvados, great and powerful French-style coffee, gateau d' foret noire (Black Forest Cake), etc. <br/>
Inexpensive to moderate, depending on your hunger, amount of wine, and budget. Daily specials are super.</p>
<br/> <br/>
<h4>"molto buono" </h4> <br/>
<p> Siamo stati in questo ristorante un giovedì di Pasqua: molta gente, quasi tutti del posto. Servizio piuttosto rapido ed efficiente, qualità buona, <br/>
prezzi buoni. Da consigliare </p>
<br/> <br/>
<hr/> 
<h4> “Carne e insalata” </h4> <br/>
<p> Siamo stati in questa cittadina francese per una sera e per cena seguendo le indicazioni su trip advisor abbiamo scelto questo ristorante vicino al <br/> 
 nostro albergo.. Grande trip advisor! La scelta è stata ottima, pur essendo sabato sera, senza prenotazione e con il locale pieno abbiamo aspettato poco,<br/>
 il personale è stato molto simpatico cortese ed efficiente e la carne era veramente buona, abbiamo preso la loro famosa entrecote e un filetto, entrambe <br/>
 buone e poi ottima anche l'insalata super varia e gustosissima! Il conto è stato anche buono rispetto agli standard della zona che sono abbastanza alti! <br/>
 Ottimo se passate di qui andateci!</p>
 <br/> <br/>
 <hr/> 
 <h4>“een aanrader” </h4> <br/>
 <p> We hebben twee dagen op rij het restaurant bezocht en het eten was heel lekker. <br/>
De eerste dag heb ik natuurlijk een entercote gegeten en deze smaakte voortreffelijk.<br/>
Op dag twee heb ik vis genomen en ook deze smaakte heel lekker alsook de wijn.<br/>
Het personeel was vriendelijk en we kragen de tweede dag ook nog een degustief van<br/>
het huis.<br/>
De reden van het bezoek was de positieve kritieken op deze site en ook het feit dat <br/>
kleine kinderen geen probleem zijn in deze zaak.</p>
<br/> <br/>
<hr/> 
<h4>“great place for local food very reasonable price” </h4> <br/>
<p> Great typical France atmosphere, friendly service, and great choise. The local meals are typical and varied from veal brains to a wide variety of local<br/>
 fish. The local plates change regular, they said. if you want to eate to "light" or nouvelle cuisine, this is the wrong place. If you can set away your<br/>
 diet plans for one evening, and want to taste real french regional food , make a reservation. <br/>
We ate here with 6 adults, 2 courses and wine for about € 100,-</p>
<br/> <br/>
 <hr/>   <h6>  42 Avenue Robert Schuman, 68100 Mulhouse </br>
		telephone : 03 89 45 42 70 </h6>
<a href="https://www.facebook.com/pages/LEntrec%C3%B4te-de-Mulhouse/276247055879410?ref=hl"/>
		<img src = "images/facebook.jpg"width="35" height="25"/>
		</center>
</body>
</html> 