<?php
try {
						  	//conexion à la base de donées Mac ('mysql:host=localhost;dbname=DSB','roo','root'); Attention windows ('mysql:host=localhost;dbname=DSB','root','');
						  $bdd = new PDO('mysql:host=localhost;dbname=DSB','root','root');
						  }
						  catch(Exception $e) {
						    die('Erreur : ' .$e->getMessage());
						  }

	//Insertion du message à l'aide d'une requête 
	$req = $bdd->prepare('INSERT INTO FORUM (pseudo,message) VALUES (? , ?)');
	$req->execute(array($_POST['pseudo'], $_POST['message']));

	//redirection du visiteur vers la page du Forum
	header('Location: forum.php');
?>