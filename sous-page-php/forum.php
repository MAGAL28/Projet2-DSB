<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/forum.css">
	<title>Forum</title>
</head>
<body>
	<section>
		<div class="box">
			<h2>Forum</h2>
	<form action="forum_post.php" method="post"> 
		<p>
			<label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo"/><br/>
			<label for="message">Message</label> : <input type="text" name="message"  id="message" minlength="4" maxlength="500" size="80" /><br />
			<input type="submit" value="Envoyer"/>
		</p>
	</form>
	<?php
	//connexion à la base de donné 
	try {
						  	//conexion à la base de donées Mac ('mysql:host=localhost;dbname=DSB','roo','root'); Attention windows ('mysql:host=localhost;dbname=DSB','root','');
						  $bdd = new PDO('mysql:host=localhost;dbname=DSB','root','root');
						  }
						  catch(Exception $e) {
						    die('Erreur : ' .$e->getMessage());
						  }
						  //Récupération des 10 dernier message
		$reponse = $bdd-> query('SELECT *  FROM FORUM ');

		//Affichage de chaque message (données protégées par htmlspecialchars)
		while($donnees = $reponse->fetch())
		{
			echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . 
			htmlspecialchars($donnees['DateMessage']) . '<p>' ;
		}
		$reponse->closeCursor();

	?>
	</div>
	</section>

</body>
</html>