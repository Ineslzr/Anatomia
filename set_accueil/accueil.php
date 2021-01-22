<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link href="../style.css" rel="stylesheet">
    <LINK href="../css/styleArticle.css" rel="stylesheet">

	<title>Accueil</title>
</head>
	<body>
		<header>
			<?php
				require_once('header.php');
			?>
		</header>

		<div class="container-fluide">
			<div class="row">


				<!-- ELEMENT DE GAUCHE -->
				<aside class="col-md-3 border" style="margin-left: 60px;">
					<div class="left-link">
						<a class="nav-link nav-left" href="">Circuit neuronal</a>
					</div>
					<div class="left-link">
						<a class="nav-link nav-left" href="">Réseau musculaire</a>
					</div>
					<div class="left-link">
						<a class="nav-link nav-left" href="">Squelette</a>
					</div>
					<div class="left-link">
						<a class="nav-link nav-left" href="">Cerveau</a>
					</div>
					<div class="left-link">
						<a class="nav-link nav-left" href="">Systeme digestif</a>
					</div>
					<div class="left-link">
						<a class="nav-link nav-left" href="">L'appareil reproducteur masculin</a>
					</div>
					<div class="left-link">
						<a class="nav-link nav-left" href="">L'appareil reproducteur féminin</a>
					</div>
				</aside>
			
				<!-- ELEMENT DU MILIEU -->
				<section class="col-md-6 border text-center">
					<h1>BIENVENUE !</h1>
					<img src="./Bitmoji/bienvenue.png" class="img-center">	
					<p>Petite présentation rapide</p>
					<p>Le corps humain est une structure où se cache bien des phénomènes et mystères scientifiques !</p>

					<p>Nous vous proposons ici quelques articles sur ses différentes parties !</p>

					<p>Vous trouverez dans les différentes rubrique différents aricle sur l'anatomie Humaine.</p>

					<p>N'hésitez pas à laisser un commentaire en bas de page d'article ou à nous contacter si vous avez des questions !</p>

					<p>Vous avez aussi la possibilité de faire des petits quizz !</p>

					<h2>Amusez-vous !</h2>

					<div>
						<img src="./Bitmoji/ines_rainbow.png" class="img-center bitmoji"><img src="./Bitmoji/darina_dinosaure.png" class="img-center bitmoji">
					</div>

					<h3>Disclaimer !</h3>
					<p>Nous ne sommes pas des spécialistes en biologie ! Ahaha</p>
					<p>Les articles proposés ont été pris majoritairement sur le site<a href="https://www.passeportsante.net/portail/parties-corps"> Passeport-Santé </a> !</p>
					<p>Pour retrouver l'article complet, veuillez consulter<a href="https://www.passeportsante.net/portail/parties-corps"> Passeport-Santé </a>!</p>
				</section>

				<!-- ELEMENT DE DROITE -->
				<aside class="col-md-3 border text-center droite"style="width: 12rem;">
					<div class="row">

						<div class="right-link text-center">
							<div class="card text-center" style="width: 10.5rem;">
								<img src="../image-accueil/cerveau.jpg" class="card-img-top img-fluid" alt="Responsive image">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
								    <p class="card-text"></p>
								    <a href="#" class="btn btn-primary btn-link-right">Go somewhere</a>
								</div>
							</div>
							<div class="card text-center" style="width: 10.5rem;">
								<img src="../image-accueil/systeme_digestif.jpg" class="card-img-top img-fluid" alt="Responsive image">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
								    <p class="card-text"></p>
								    <a href="#" class="btn btn-primary btn-link-right">Go somewhere</a>
								</div>
							</div>
							<div class="card text-center" style="width: 10.5rem;">
								<img src="../image-accueil/poumon.jpg" class="card-img-top img-fluid" alt="Responsive image">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
								    <p class="card-text"></p>
								    <a href="#" class="btn btn-primary btn-link-right">Go somewhere</a>
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
	    <footer>
	    	<?php
				require_once('footer.php');
	    	?>
		</footer>
	</body>
</html>