<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/table-style.css">
	<title>Cours DSB</title>
	<link rel="stylesheet" type="text/css" href="../css/siteClub.css">
</head>
<body>
	<header class="entête">
		<ul class="menuEntête">
			<li><a href="club.php">CLUBS</a></li>
			<li><a href="http://localhost:8888/sous-page-php/forum.php">FORUM</a></li>
			<li><a href="http://localhost:8888/sous-page-php/index.php">CONNEXION</a></li>
		</ul>
	</header>
		<section id="section1">
		<li class="connexion">
		<a href="http://localhost:8888/sous-page-php/index.php"><img src="../images/img.gif"></a>
		</li>
		<li class="logo">
			<a href="../home.html"><img src="../images/logo1.png"></a>
		</li>
	</section>


<table class="tableau-style">
	<thead>
		<caption><h1>Tableau Récapitulatif</h1></caption>
		<tr id="me">
			<th>Numéro</th>
			<th>Type</th>
			<th>Nom du fichier</th>
			<th>Lien</th>
		</tr>
	</thead>
	
	<tbody>
		<!--  Ligne 1 --->
		<tr>
			<td class="first">1</td>
			<td>XML</td>
			<td>Q8a-XML.xml</td>
			<td class="cursor"><a href="http://localhost:8888/media/Q8a-XML.xml" >Aller sur la page </a></td>
		</tr>
			<!--  Ligne 2 --->
		<tr>
			<td class="first">2</td>
			<td>XML</td>
			<td>Q8b-XML.xml</td>
			<td class="cursor"><a href="http://localhost:8888/media/Q8b-XML.xml">Aller sur la page</a></td>
		</tr>
			<!--  Ligne 3 --->
		<tr>
			<td class="first">3</td>
			<td>DTD</td>
			<td>Q7-DTD.dtd</td>
			<td class="cursor"><a href="http://localhost:8888/media/Q7-DTD.dtd">Télécharger le document</a></td>
		</tr>
			<!--  Ligne 4 --->
		<tr>
			<td class="first">4</td>
			<td>XHTML</td>
			<td>Validation XHTML</td>
			<td class="cursor"><a href="https://validator.w3.org/nu/#textarea" target="_blank">Aller sur le site </a></td>
		</tr>
			<!--  Ligne 5 --->
		<tr>
			<td class="first">5</td>
			<td>CSS</td>
			<td>Validation CSS</td>
			<td class="cursor"><a href="https://jigsaw.w3.org/css-validator/" target="_blank">Aller sur le site </a></td>
		</tr>

	</tbody>
	
</table>
<div class="partiexpath">

<h1 class="xpath"> Requêtes XPATH - XML</h1>

<div>
	<h4>Contenus des éléments &lt documentation &gt </h4>
	<img id="img" src="../images-xpath/img.png" hidden>

	<button onclick="show_hide()">Voir & Fermer</button>
</div>
<div>
	<h4>Le premier élément &lt documentation &gt </h4>
	<img id="img1" src="../images-xpath/img1.png" hidden>

	<button onclick="show_hide1()">Voir & Fermer</button>
</div>
<div>
	<h4>Les éléments &lt documentation &gt n'ayant pas d'élément &lt lien &gt </h4>
	<img id="img2" src="../images-xpath/img2.png"  hidden>
	<p> vous aurez deux exemples pour la réponse de cette requête : <br></p>
	<img id="img2bis" src="../images-xpath/img2bis.png"  hidden>

	<button onclick="show_hide2()">Voir & Fermer</button>
</div> <br/>
<h1 class="xpath"> Requêtes XPATH - XHTML</h1>
<div>
	<h4>Les valeurs des attributs href  </h4>
	<img id="img3" src="../images-xpath/img3.png" hidden>

	<button onclick="show_hide3()">Voir & Fermer</button>
</div> <br/>
<div>
	<h4>Nombre d'images dans un document </h4>
	<img id="img4" src="../images-xpath/img4.png" hidden>

	<button onclick="show_hide4()">Voir & Fermer</button>
</div> <br/>


<script src="../JavaScript/showhideelement.js">

</script>
</div>



</body>
</html>