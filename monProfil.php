<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<!--<meta charset="UTF-8">-->
	<title> Mon Profil </title>
	<LINK href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<LINK rel="stylesheet" href="css/styleProfile.css">
	
</head>

<body>
	<header>
	<nav class="navbar navbar-expand-sm navbar-light" style="background-color:rgb(37,42,55);">
		<a href="#" class="navbar-brand px-5">
			<img  src="img/logo.png" alt="logo_nouvelle"/> 
		</a>
		
		<div class="collapse navbar-collapse">
			<ul class="navbar-nav" >
				<li class="nav-item ">
					<a href="#" class="nav-link">Home</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Anatomie</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Enseignement</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Quiz</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Dictionnaire</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Discussion</a>
				</li>
				<li class="nav-item ">
					<a href="#" class="nav-link">Contact</a>
				</li>
			</ul>
			<ul class="navbar-nav ms-auto px-5">
				<li class="nav-item ">
					<a href="#" class="nav-link">Sign Up</a>
				</li>
				<li class="nav-item ">
					<a href="index.php?module=connexion&action=form_connexion" class="nav-link">Sign In</a>
				</li>
			</ul>

		</div>
	</nav>
</header>
	
	<div class="container mx-auto">
		<div class="row">
			<div class="col-lg-10">			
				<div class="card">					
					<div class="pp">
						<div class="circle"><img src="img/ajoutez_pp.png" id="photo" >

						</div>
							
					</div>
					<div class="upload">
						<input type="file" id="file">
						<label for="file" id="uploadBtn">Choose Photo</label>
					</div>
					<div class="info ">						
						<h1 class="title">Mon Profil </h1>
							<div class="description_profil ms-5">
								<h2>Mon Compte</h2>
								<p> Nom d'utilisateur : <?php echo $_SESSION['nomUtilisateur']; ?></p>
								<p> Mail : <?php echo $_SESSION['email'] ?></p>
								<h2>Mes articles lues et mes quiz fait</h2>
								<div class="articles_lues"></div>
								<div class="quiz_fait"></div>


							</div>					
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer style="background-color:rgb(37,42,55);">
		<div class="container">
			<div class="row mx-auto">
				<div class="col text-center">
					<h1 class="text-capitalize font-weight-light p-3 " style="color: rgb(244,213,41);"> Suivez-nous!</h1>

					<a href="https://twitter.com/?lang=fr"><img src="img/twitter.png" alt="icon_twitter"></a>
					<a href="https://www.instagram.com/?hl=fr"><img src="img/insta.png" alt="icon_insta"></a>
					<a href="https://fr-fr.facebook.com/"><img src="img/facebook.png" alt="icon_facebook"></a>

				</div>
			</div>
		</div>
	</footer>

	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/monProfil.js"></script>

</body>
</html>