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
	<body>
		<header>
			<?php
				/*INES*/
				//require_once('C:/wamp64/www/...../set_accueil/header.php');
				/*DARINA*/
				require_once('header.php');
			?>
		</header>

		<div class="container-fluide">
			<div class="row">
				<!-- ELEMENT DE GAUCHE -->
				<aside class="col-md-3 border">
					<div classe="row">
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
					</div>
				</aside>
				<!-- ELEMENT DU MILIEU -->
				<section class="col-md-6 border text-center">
					<div class="row">
						<h1>BONJOUR</h1>
						<div class="text-center">
		    				<img src="../image-accueil/stickman.png" class="img-center" alt="Responsive image">	
						</div>
					</div>
				</section>
				<!-- ELEMENT DE DROITE -->
				<aside class="col-md-3 border text-center droite"style="width: 10rem;">
					<div class="row">

						<div class="right-link text-center">
							<div class="card text-center" style="width: 8.5rem;">
								<img src="../image-accueil/cerveau.jpg" class="card-img-top img-fluid" alt="Responsive image">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
								    <p class="card-text"></p>
								    <a href="#" class="btn btn-primary btn-link-right">Go somewhere</a>
								</div>
							</div>
							<div class="card text-center" style="width: 8.5rem;">
								<img src="../image-accueil/systeme_digestif.jpg" class="card-img-top img-fluid" alt="Responsive image">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
								    <p class="card-text"></p>
								    <a href="#" class="btn btn-primary btn-link-right">Go somewhere</a>
								</div>
							</div>
							<div class="card text-center" style="width: 8.5rem;">
								<img src="../image-accueil/poumon.jpg" class="card-img-top img-fluid" alt="Responsive image">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
								    <p class="card-text"></p>
								    <a href="#" class="btn btn-primary btn-link-right">Go somewhere</a>
								</div>
							</div>
							<div class="card text-center" style="width: 8.5rem;">
								<img src="../image-accueil/female.png" class="card-img-top img-fluid" alt="Responsive image">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
								    <p class="card-text"></p>
								    <a href="#" class="btn btn-primary btn-link-right">Go somewhere</a>
								</div>
							</div>
							<div class="card text-center" style="width: 8.5rem;">
								<img src="../image-accueil/male.png" class="card-img-top img-fluid" alt="Responsive image">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
								    <p class="card-text"></p>
								    <a href="#" class="btn btn-primary btn-link-right">Go somewhere</a>
								</div>
							</div>
							<div class="card text-center" style="width: 8.5rem;">
								<img src="../image-accueil/circuit_neuronal.jpg" class="card-img-top img-fluid" alt="Responsive image">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
								    <p class="card-text"></p>
								    <a href="#" class="btn btn-primary btn-link-right">Go somewhere</a>
								</div>
							</div>
							<div class="card text-center" style="width: 8.5rem;">
								<img src="../image-accueil/muscles.jpg" class="card-img-top img-fluid" alt="Responsive image">
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
	    		/*INES*/
				//require_once('C:/wamp64/www/...../set_accueil/footer.php');
				/*DARINA*/
				require_once('footer.php');
	    	?>
		</footer>
	</body>
</html>