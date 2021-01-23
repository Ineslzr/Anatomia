<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link href="../style.css" rel="stylesheet">

	<title>Accueil</title>
</head>
	<header>
		<?php
			require_once('header.php');
		?>
	</header>
	<body style="background-color: #e3e3e3;">

		<div class="container-fluide">
			<div class="row">
				<!-- ELEMENT DE GAUCHE -->
				<aside class="col-md-3 border" style="margin-left: 30px; background-color: white;">
					<div class="left-link">
						<a class="nav-link nav-left" id="tete" href="index.php?module=lire_article&actiion=lire_article&id=tete">La tête</a>
					</div>
					<div class="left-link">
						<a class="nav-link nav-left" href="index.php?module=lire_article&actiion=lire_article&id=">Les bras</a>
					</div>
					<div class="left-link">
						<a class="nav-link nav-left" href="">La cage thoracique</a>
					</div>
					<div class="left-link">
						<a class="nav-link nav-left" href="">L'adbomen</a>
					</div>
					<div class="left-link">
						<a class="nav-link nav-left" href="">L'appareil reproducteur masculin</a>
					</div>
					<div class="left-link">
						<a class="nav-link nav-left" href="">L'appareil reproducteur féminin</a>
					</div>
					<div class="left-link">
						<a class="nav-link nav-left" href="">Les jambes</a>
					</div>

				</aside>
			
				<!-- ELEMENT DU MILIEU -->
				<section class="col-md-6 border text-center" style="background-color: white;">
					<h1>BONJOUR !</h1>
					<img src=".img/Bitmoji/bienvenue.png" class="img-center">	
					<p>Petite présentation rapide</p>
					<p>Le corps humain est une structure où se cache bien des phénomènes et mystères scientifiques !</p>

					<p>Nous vous proposons ici quelques articles sur ses différentes parties !</p>

					<p>Vous trouverez dans les différentes rubrique différents aricle sur l'anatomie Humaine.</p>

					<p>N'hésitez pas à laisser un commentaire en bas de page d'article ou à nous contacter si vous avez des questions !</p>

					<p>Vous avez aussi la possibilité de faire des petits quizz !</p>

					<h2>Amusez-vous !</h2>

					<div>
						<img src=".img/Bitmoji/ines_rainbow.png" class="img-center bitmoji"><img src=".img/Bitmoji/darina_dinosaure.png" class="img-center bitmoji">
					</div>

					<h3>Disclaimer !</h3>
					<p>Nous ne sommes pas des spécialistes en biologie ! Ahaha</p>
					<p>Les articles proposés ont été pris majoritairement sur le site<a href="https://www.passeportsante.net/portail/parties-corps"> Passeport-Santé </a> !</p>
					<p>Pour retrouver l'article complet, veuillez consulter<a href="https://www.passeportsante.net/portail/parties-corps"> Passeport-Santé </a>!</p>
				</section>

				<!-- ELEMENT DE DROITE -->
				<aside class="col-md-3 border text-center droite"style="width: 12rem; background-color: white;">
					
					<div class="row">
						<div class="right-link text-center">
								
					<h2>Faites un quiz ! </h2>
					<div class="single-content">
						<p>Quiz n°1</p>
						<img src="../img/quiz.jpg" alt="quiz">
						<div class="text-content">
							<a href="#"><h4>Quiz 1</h4></a>
						</div>
					</div>
					<br>
					<div class="single-content">
						<p>Quiz n°2</p>
						<img src="../img/quiz.jpg" alt="quiz">
						<div class="text-content">
							<a href="#"><h4>Quiz 2</h4></a>
						</div>
					</div>
					<br>
					<div class="single-content">
						<p>Quiz n°3</p>
						<img src="../img/quiz.jpg" alt="quiz">
						<div class="text-content">
							<a href="#"><h4>Quiz 3</h4></a>
						</div>
					</div>
				</div>
			</div>
		</div>
				</aside>
				<!-- FIN -->
			</div>
		</div>		 
	<br>
		<br>
		<br>
   <footer style="background-color:rgb(37,42,55);">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h1 class="text-capitalize font-weight-light p-3 " style="color: rgb(244,213,41);"> Suivez-nous!</h1>

					<a href="https://twitter.com/?lang=fr"><img src="../img/twitter.png" alt="icon_twitter"></a>
					<a href="https://www.instagram.com/?hl=fr"><img src="../img/insta.png" alt="icon_insta"></a>
					<a href="https://fr-fr.facebook.com/"><img src="../img/facebook.png" alt="icon_facebook"></a>

				</div>
			</div>
		</div>
	</footer>
	</body>
</html>