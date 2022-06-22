
<?php
include 'header.php';
?>

	<section id="section1">
		<li class="connexion">
		<a href="http://localhost:8888/sous-page-php/index.php"><img src="../images/img.gif"></a>
		</li>
		<li class="logo">
			<a href="../home.html"><img src="../images/logo1.png"></a>
		</li>
	</section>
	<section id="blog">
		<!-- heading -->
		<div class="blog-heading">
			<span><a href="../home.html">Home</a></span>
			<h3>INFOS CLUBS</h3>
		</div>

		<!-- blog container --> 
		<div  class="blog-container">
			<!--box ---1 ---->
			<div class="blog-box">
				<!--img-->
				<div class="blog-img">
					<img src="../images/rennes.png" alt="Blog">
				</div>
				<!--text--->
				<div id="container">
					<p>
						<?php 
						  try {
						  $bdd = new PDO('mysql:host=localhost;dbname=DSB','root','root');
						  }
						  catch(Exception $e) {
						    die('Erreur : ' .$e->getMessage());
						  }
						  //récupère tous le contenuue de la table 
						  $reponse = $bdd->query('SELECT * FROM CLUB');
						  

						  //AFFICHAGE
						  while($donnees = $reponse->fetch())
						  {
						  	if ($donnees['idc']== 1) {
						  		echo $donnees ['nom'] . ' est un club qui joue en division ' . $donnees['div']. '.';
						  	}
						    
						  }
						  //terminer la boucle
						  $reponse->closeCursor();
						   ?>
						   <?php
						   $reponse = $bdd->query('SELECT * FROM ENTRAINEUR ');
						     //AFFICHAGE
						  while($donnees = $reponse->fetch())
						  {
						  	if ($donnees['ide']==2) {
						  		 echo $donnees ['nom'] . ' ' . $donnees['prenom'].' est l\'entraineur de ce Club. Il est agé de ' . $donnees['age'] .' ans  ';
						  	}
						    
						  }
						  //terminer la boucle
						  $reponse->closeCursor();
						   ?> <br/>
						   <a href="http://localhost:8888/sous-page-php/rennes.php" title="voirSite">En savoir plus...</a>
					</p>
					<span id="span"></span>
					<script type="text/javascript">
					document.getElementById('span').addEventListener('click',function(){
					document.getElementById('container').classList.toggle('active');
					});
				</script>
				</div>
			</div>
			<!--box --- 2 ---->
			<div class="blog-box">
				<!--img-->
				<div class="blog-img">
					<img src="../images/paris.png" alt="Blog">
				</div>
				<!--text--->
				<div id="container1">
					<p>
						<?php 
						  try {
						  $bdd = new PDO('mysql:host=localhost;dbname=DSB','root','root');
						  }
						  catch(Exception $e) {
						    die('Erreur : ' .$e->getMessage());
						  }
						  //récupère tous le contenuue de la table 
						  $reponse = $bdd->query('SELECT * FROM CLUB');
						  

						  //AFFICHAGE
						  while($donnees = $reponse->fetch())
						  {
						  	if ($donnees['idc']== 3) {
						  		echo $donnees ['nom'] . ' est un club qui joue en division ' . $donnees['div']. '.';
						  	}
						    
						  }
						  //terminer la boucle
						  $reponse->closeCursor();
						   ?>
						   <?php
						   $reponse = $bdd->query('SELECT * FROM ENTRAINEUR ');
						     //AFFICHAGE
						  while($donnees = $reponse->fetch())
						  {
						  	if ($donnees['ide']==1) {
						  		 echo $donnees ['nom'] . ' ' . $donnees['prenom'].' est l\'entraineur de ce Club. Il est agé de ' . $donnees['age'] .' ans  ';
						  	}
						    
						  }
						  //terminer la boucle
						  $reponse->closeCursor();
						   ?><br/>
						   <a href="http://localhost:8888/sous-page-php/paris.php" title="voirSite">En savoir plus...</a>
					</p>
					<span id="span1"></span>
					<script type="text/javascript">
					document.getElementById('span1').addEventListener('click',function(){
					document.getElementById('container1').classList.toggle('active');
					});
				</script>
				</div>
			</div>
			<!--box --- 3 ---->
			<div class="blog-box">
				<!--img-->
				<div class="blog-img">
					<img src="../images/OM.png" alt="Blog">
				</div>
				<!--text--->
				<div id="container2">
					<p>
						<?php 
						  try {
						  $bdd = new PDO('mysql:host=localhost;dbname=DSB','root','root');
						  }
						  catch(Exception $e) {
						    die('Erreur : ' .$e->getMessage());
						  }
						  //récupère tous le contenuue de la table 
						  $reponse = $bdd->query('SELECT * FROM CLUB');
						  

						  //AFFICHAGE
						  while($donnees = $reponse->fetch())
						  {
						  	if ($donnees['idc']==2) {
						  		echo $donnees ['nom'] . ' est un club qui joue en division ' . $donnees['div']. '.';
						  	}
						    
						  }
						  //terminer la boucle
						  $reponse->closeCursor();
						   ?>
						   <?php
						   $reponse = $bdd->query('SELECT * FROM ENTRAINEUR ');
						     //AFFICHAGE
						  while($donnees = $reponse->fetch())
						  {
						  	if ($donnees['ide']==3) {
						  		 echo $donnees ['nom'] . ' ' . $donnees['prenom'].' est l\'entraineur de ce Club. Il est agé de ' . $donnees['age'] .' ans  ';
						  	}
						    
						  }
						  //terminer la boucle
						  $reponse->closeCursor();
						   ?><br/>
						   <a href="http://localhost:8888/sous-page-php/OM.php" title="voirSite">En savoir plus...</a>
					</p>
					<span id="span2"></span>
					<script type="text/javascript">
					document.getElementById('span2').addEventListener('click',function(){
					document.getElementById('container2').classList.toggle('active');
					});
				</script>
				</div>
			</div>	
				<!--box --- 4 ---->
			<div class="blog-box">
				<!--img-->
				<div class="blog-img">
					<img src="../images/barcelone.png" alt="Blog">
				</div>
				<!--text--->
				<div id="container3">
					<p>
						<?php 
						  try {
						  $bdd = new PDO('mysql:host=localhost;dbname=DSB','root','root');
						  }
						  catch(Exception $e) {
						    die('Erreur : ' .$e->getMessage());
						  }
						  //récupère tous le contenuue de la table 
						  $reponse = $bdd->query('SELECT * FROM CLUB');
						  

						  //AFFICHAGE
						  while($donnees = $reponse->fetch())
						  {
						  	if ($donnees['idc']==4) {
						  		echo $donnees ['nom'] . ' est un club qui joue en division ' . $donnees['div']. '.';
						  	}
						    
						  }
						  //terminer la boucle
						  $reponse->closeCursor();
						   ?>
						   <?php
						   $reponse = $bdd->query('SELECT * FROM ENTRAINEUR ');
						     //AFFICHAGE
						  while($donnees = $reponse->fetch())
						  {
						  	if ($donnees['ide']==4) {
						  		 echo $donnees ['nom'] . ' ' . $donnees['prenom'].' est l\'entraineur de ce Club. Il est agé de ' . $donnees['age'] .' ans  ';
						  	}
						    
						  }
						  //terminer la boucle
						  $reponse->closeCursor();
						   ?> <br/>
						   <a href="http://localhost:8888/sous-page-php/barcelone.php" title="voirSite">En savoir plus...</a>
					</p>
					<span id="span3"></span>
					<script type="text/javascript">
					document.getElementById('span3').addEventListener('click',function(){
					document.getElementById('container3').classList.toggle('active');
					});
				</script>
				</div>
			</div>			
				</div>
			</div>
		</div>
	</section>


	<section id="block">
		
	</section>
	
</body>
</html>