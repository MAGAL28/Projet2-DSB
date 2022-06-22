<?php
include 'headerClub.php';
?>
	<section id="section1">

		<li class="connexion">
		<a href="http://localhost:8888/sous-page-php/index.php"><img src="../images/img.gif"></a>
		</li>
		<li class="logo">
			<a href="http://localhost:8888/sous-page-php/club.php"><img src="../images/rennesLogo.png"></a>
		</li>
	</section>
	<section class="section2">
		<style type="text/css">
			.section2 {
	position: relative;
	width: 100%;
	height: 100%;
	min-height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
	background-image: url('../images/stade-rennais.jpeg');
	
	
	background-repeat: no-repeat;
	overflow: hidden;
	background-size: cover;
}
		</style>

		<div class="swiper mySwiper">
      		<div class="swiper-wrapper">

      			<!------- Slid Entraineur ---------->
      		<div class="swiper-slide">
      			<div class="testimonialBox">
      				<img src="../images/quote.png" class="quote">
      				<div class="content">
      					<p class="pp">
      						Né le 1er septembre 1966 à Lyon, est un ancien footballeur professionnel français, évoluant au poste de milieu de terrain, reconverti en entraîneur. 
      							<?php 
						  try {
						  	//conexion à la base de donées Mac ('mysql:host=localhost;dbname=DSB','roo','root'); Attention windows ('mysql:host=localhost;dbname=DSB','root','');
						  $bdd = new PDO('mysql:host=localhost;dbname=DSB','root','root');
						  }
						  catch(Exception $e) {
						    die('Erreur : ' .$e->getMessage());
						  }
						   //requête sql
						   $reponse = $bdd->query('SELECT * FROM ENTRAINEUR ');

						     //AFFICHAGE
						  while($donnees = $reponse->fetch())
						  {
						  	if ($donnees['ide']==2) {
						  	?>
						   <br/>
      					<div class="details">
      						<div class="imgBx">
      							<img src="../images/bruno.jpeg">
      						</div>

      						<h3><?php  echo $donnees ['nom'] . ' ' . $donnees['prenom']; } ; } /*Close boucle*/ $reponse->closeCursor(); ?><br>
      							<span>Entraineur FC Rennes</span></h3>
      						
      					</div>
      				</p>
      				</div>
      			</div>	
      		</div>
      		<!------- Slid Joueur Mbappé ---------->
      		<div class="swiper-slide">
      			<div class="testimonialBox">
      				<img src="../images/quote.png" class="quote">
      				<div class="content">
      					<p class="pp">
      						
      							<?php 
						  
						   //requête sql
						   $reponse = $bdd->query('SELECT * FROM JOUEUR ');

						     //AFFICHAGE
						  while($donnees = $reponse->fetch())
						  {
						  	if ($donnees['idj']==11) {
						  		echo $donnees['Historique'];
						  	?>
						   <br/>
      					<div class="details">
      						<div class="imgBx">
      							<img src="../images/doku.jpg">
      						</div>

      						<h3><?php  echo $donnees ['nom'] . ' ' . $donnees['prenom'];  ?><br>
      							<span><?php  echo $donnees['poste'];};} /*Close boucle*/ $reponse->closeCursor(); ?></span></h3>
      						
      					</div>
      				</p>
      				</div>
      			</div>	
      		</div>
      		<!------- Slid Joueur Kamaldeen ---------->
      		<div class="swiper-slide">
      			<div class="testimonialBox">
      				<img src="../images/quote.png" class="quote">
      				<div class="content">
      					<p class="pp">
      						
      							<?php 
						  
						   //requête sql
						   $reponse = $bdd->query('SELECT * FROM JOUEUR ');

						     //AFFICHAGE
						  while($donnees = $reponse->fetch())
						  {
						  	if ($donnees['idj']==12) {
						  		echo $donnees['Historique'];
						  	?>
						   <br/>
      						<div class="details">
      						<div class="imgBx">
      							<img src="../images/kamaldeen.jpg">
      						</div>

      						<h3><?php  echo $donnees ['nom'] . ' ' . $donnees['prenom'];  ?><br>
      							<span><?php  echo $donnees['poste'];};} /*Close boucle*/ $reponse->closeCursor(); ?></span></h3>
      						
      					</div>
      				</p>
      				</div>
      			</div>	
      		</div>
      	<!------- Slid Joueur Gomis ---------->
      		<div class="swiper-slide">
      			<div class="testimonialBox">
      				<img src="../images/quote.png" class="quote">
      				<div class="content">
      					<p class="pp">
      						
      							<?php 
						  
						   //requête sql
						   $reponse = $bdd->query('SELECT * FROM JOUEUR ');

						     //AFFICHAGE
						  while($donnees = $reponse->fetch())
						  {
						  	if ($donnees['idj']==13) {
						  		echo $donnees['Historique'];
						  	?>
						   <br/>
      						<div class="details">
      						<div class="imgBx">
      							<img src="../images/gomis.jpg">
      						</div>

      						<h3><?php  echo $donnees ['nom'] . ' ' . $donnees['prenom'];  ?><br>
      							<span><?php  echo $donnees['poste'];};} /*Close boucle*/ $reponse->closeCursor(); ?></span></h3>
      						
      					</div>
      				</p>
      				</div>
      			</div>	
      		</div>
    	</div>
   	 </div>
	</section>
	<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
	<script>
      var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: true,
        },
        pagination: {
          el: ".swiper-pagination",
        },
      });
    </script>
    <section id="match">
    	<div class="container">
    		<div class="box">
    			<h1>Samedi 01 Janvier 22</h1>
    			<h3>Dernier Match</h3>
    			<p>
					<?php 
						  
						   //requête sql
						   $reponse = $bdd->query('SELECT * FROM MATCHS WHERE nomClub1 = "FC Rennes" or nomClub2 = "FC Rennes" ');
						   

						       //AFFICHAGE
						  while($donnees = $reponse->fetch())
						  {
						  	if (strcmp($donnees['Date'],"2022-01-11")==0) {
						  	
						  		echo $donnees['nomClub1'] . '  -  ' . $donnees['nomClub2'] ;
						  	
						  	?>
						  	<h3>Arbitre du match</h3>

						  	<?php
						  	
						  }	
						  ;
						}
						$reponse->closeCursor();
						  
						  $reponse = $bdd->query('SELECT * FROM ARBITRE');
						  while($donnees = $reponse->fetch())
						  {
						  	if (strcmp($donnees['nom'],"Fall")==0) {
						  	
						  		echo '<p>' . 

						  		$donnees['nom']. ' ' . $donnees['prenom'] . ' ' . $donnees['age'] . ' ans '

						  		. '</p>';
						  		?>
						  		<h3>Gagant Match</h3>
						  		<?php
						  	}
						  	;

						}
						     $reponse->closeCursor();	
						    echo '<p>' . 

						  		'FC Rennes'

						  		. '</p>';

						  $reponse->closeCursor();

					?>
				
					
				
		
	    		</p>
    		</div>
    		<!------ AVANT DERNIER MATCH -------------->
    		<div class="box">
    			<h1>Jeudi 10 Juin 21</h1>
    			<h3>Avant dernier match</h3>
    			<p>
					<?php 
						  
						   //requête sql
						   $reponse = $bdd->query('SELECT * FROM MATCHS WHERE nomClub1 = "FC Rennes" or nomClub2 = "FC Rennes" ');
						   

						       //AFFICHAGE
						  while($donnees = $reponse->fetch())
						  {
						  	if (strcmp($donnees['Date'],"2021-06-10")==0) {
						  	
						  		echo $donnees['nomClub1'] . '  -  ' . $donnees['nomClub2'] ;
						  	
						  	?>
						  	<h3>Arbitre du match</h3>

						  	<?php
						  	
						  }	
						  ;
						}
						$reponse->closeCursor();
						  
						  $reponse = $bdd->query('SELECT * FROM ARBITRE');
						  while($donnees = $reponse->fetch())
						  {
						  	if (strcmp($donnees['idar'],"2")==0) {
						  	
						  		echo '<p>' . 

						  		$donnees['nom']. ' ' . $donnees['prenom'] . ' ' . $donnees['age'] . ' ans '

						  		. '</p>';
						  		?>
						  		<h3>Gagant Match</h3>
						  		<?php
						  	}
						  	;

						}
						     $reponse->closeCursor();	
						    echo '<p>' . 

						  		'FC Barcelone'

						  		. '</p>';

						  $reponse->closeCursor();

					?>
				
					
				
		
	    		</p>
    		</div>
    		<div class="box">
    			<h1>Mardi 18 Mai 21</h1>
    			<h3>Match du passé</h3>
    			<p>
					<?php 
						  
						   //requête sql
						   $reponse = $bdd->query('SELECT * FROM MATCHS WHERE nomClub1 = "FC Rennes" or nomClub2 = "FC Rennes" ');
						   

						       //AFFICHAGE
						  while($donnees = $reponse->fetch())
						  {
						  	if (strcmp($donnees['Date'],"2021-05-18")==0) {
						  	
						  		echo $donnees['nomClub1'] . '  -  ' . $donnees['nomClub2'] ;
						  	
						  	?>
						  	<h3>Arbitre du match</h3>

						  	<?php
						  	
						  }	
						  ;
						}
						$reponse->closeCursor();
						  
						  $reponse = $bdd->query('SELECT * FROM ARBITRE');
						  while($donnees = $reponse->fetch())
						  {
						  	if (strcmp($donnees['idar'],"3")==0) {
						  	
						  		echo '<p>' . 

						  		$donnees['nom']. ' ' . $donnees['prenom'] . ' ' . $donnees['age'] . ' ans '

						  		. '</p>';
						  		?>
						  		<h3>Gagant Match</h3>
						  		<?php
						  	}
						  	;

						}
						     $reponse->closeCursor();	
						    echo '<p>' . 

						  		'Paris Saint-Germain'

						  		. '</p>';

						  $reponse->closeCursor();

					?>
				
					
				
		
	    		</p>
    		</div>
    	</div>
    </section>





   </body>
 </html>

	
	