<?php
include 'header.php';
?>
<style type="text/css">
			.date{
				color: red;
				font-size: 0.8em;
			}
			.img{
				width: 120px;
				height: 50px;
			}
		</style>
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
			<h3>NEWS</h3>
		</div>
<div class="blog-container">

	<!--box ---1 ---->
	<div class="blog-box">

	<div id="container">
		<img class="img" src="../images/leparisien.png">
		<h3>Par David Opoczynski</h3>
		<span class="date">Le 28 avril 2022 à 14h17</span>

		<p>
			Enfin officiellement sacré champion de France, le PSG se déplace à Strasbourg ce vendredi soir (21 heures, Prime Video) pour la 35e journée. Pour Mauricio Pochettino ce match sera avant tout l’occasion de voir son équipe tenter d’aider Kylian Mbappé à conforter sa place en tête du classement des buteurs. En conférence de presse ce jeudi, à la mi-journée, l’entraîneur argentin est apparu détendu.

			Est-ce plus dur de lancer des jeunes à Paris qu’à Tottenham ?

			MAURICIO POCHETTINO. Non, je ne crois pas. Ce n’est pas une question de pression médiatique. C’est une question de philosophie, de stratégie. Où est-ce que le club est aujourd’hui ? Où est-ce qu’il veut aller. A Tottenham nous avions 35 joueurs dont des jeunes avec un projet sur cinq ans où ils pouvaient avoir l’opportunité de montrer leurs qualités et le temps de se développer. Donc ce n’est pas une question de pression mais de projet.

			Sentez-vous l’équipe mobilisée pour permettre à Kylian Mbappé de finir meilleur buteur du championnat ?

			C’est clair qu’une fois l’objectif collectif atteint on peut se concentrer sur les objectifs individuels. C’est quelque chose naturel. Chacun aura le soutien qu’il mérite et dans le cas de Kylian il n’y aura aucun problème pour ses équipiers et toute l’équipe pour l’aider à atteindre ce but.

		</p>
		<span id="span"></span>
		<script type="text/javascript">
			document.getElementById('span').addEventListener('click',function(){
				document.getElementById('container').classList.toggle('active');
			});
		</script>
	</div>
</div>
<!--box ---1 ---->
	<div class="blog-box">
	<div id="container2">
		<img class="img" src="../images/logo-but.png">
		<h3>Par Adam Duarte</h3>
		<span class="date">Le 28 avril 2022 à 14h17</span>
		<p>
			Le FC Barcelone arrive au terme de sa saison. Après plusieurs mauvais résultats, le club catalan se retrouve en danger, en championnat, et voit sa deuxième place menacée par l’Atletico Madrid ainsi que le FC Séville. Pour relancer son équipe et retrouver le chemin de la victoire, Xavi abat sa dernière carte.
			LA SUITE APRÈS LA PUBLICITÉ

			En effet, ce jeudi 28 avril, après la séance d’entrainement, les joueurs de l'équipe première se retrouveront pour déjeuner tous ensembles pour resserrer les liens et aussi pour évoquer les cinq derniers matchs de la saison. Une initiative prise par le coach du FC Barcelone.

		</p>
		<span id="span2"></span>
		<script type="text/javascript">
			document.getElementById('span2').addEventListener('click',function(){
				document.getElementById('container2').classList.toggle('active');
			});
		</script>
	</div>
</div>


	<!--box ---1 ---->
	<div class="blog-box">
	<div id="container1">
		<img class="img" src="../images/liverpool.png">
		<h3>By James Carroll</h3>
		<span class="date">Published 45 minutes ago</span>
		<p>
			Liverpool Football Club is delighted to announce Jürgen Klopp has signed a new contract to extend his commitment with the club.
			The deal means the manager will remain at the helm of the Reds beyond the expiry of his previous deal, which was set to end in 2024.

			Assistants Pepijn Lijnders and Peter Krawietz have also put pen to paper on new terms, mirroring those of Klopp’s and reaffirming their dedication to the project, which began with the German’s appointment in October 2015.

			After inking the contract, Klopp told of his delight to Liverpoolfc.com by saying: “There are so many words I could use to describe how I am feeling about this news… delighted, humbled, blessed, privileged and excited would be a start.
			“There is just so much to love about this place. I knew that before I came here, I got to know it even better after I arrived and now I know it more than ever before.

			“Like any healthy relationship, it always has to be a two-way street; you have to be right for each other. The feeling we were absolutely right for each other is what brought me here in the first place and it’s why I’ve extended previously.

			“This one is different because of the length of time we have been together. I had to ask myself the question: Is it right for Liverpool that I stay longer?

			“Along with my two assistant managers, Pep Lijnders and Pete Krawietz, we came to the conclusion it was a ‘Yes!’

			“There is a freshness about us as a club still and this energises me. For as long as I have been here, our owners have been unbelievably committed and energetic about this club and it is clear that right now this applies to our future as much as I’ve ever known.
		</p>
		<span id="span1"></span>
		<script type="text/javascript">
			document.getElementById('span1').addEventListener('click',function(){
				document.getElementById('container1').classList.toggle('active');
			});
		</script>
	</div>
	</div>
</div>
	</section>
</body>
</html>