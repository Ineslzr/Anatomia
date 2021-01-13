<!DOCTYPE html>
<html>
	<head>
		<meta charset= "UTF-8"/>
		<title>Discussion</title>
		<LINK href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<LINK href="css/styleDiscussion.css" rel="stylesheet">
	</head>

<body>
	<nav class="navbar navbar-expand-sm navbar-light" style="background-color:rgb(37,42,55);">
		<a href="#" class="navbar-brand px-5">
			<img  src="img/logo.png" alt="logo_nouvelle"/> 
		</a>
		
		<div class="collapse navbar-collapse">
			<ul class="navbar-nav" >
				<li class="nav-item ">
                    <a class="nav-link active" aria-current="page" href="index.php">
                        <img src="image-accueil/home.png" width="30" height="30" alt="">
                    </a>
				</li>
				<li class="nav-item">
					<a href="galerie.html" class="nav-link">Anatomie</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Enseignement</a>
				</li>
				<li class="nav-item">
					<a href="accueil_discussion.html" class="nav-link">Quiz</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Dictionnaire</a>
				</li>
				<li class="nav-item">
					<a href="accueil_discussion.html" class="nav-link">Discussion</a>
				</li>
				<li class="nav-item ">
					<a href="#" class="nav-link">Contact</a>
				</li>
			</ul>
			<ul class="navbar-nav ms-auto px-5">
				<li class="nav-item ">
					<a href="index.php?module=connexion&action=form_inscription" class="nav-link">Sign Up</a>
				</li>
				<li class="nav-item ">
					<a href="index.php?module=connexion&action=form_connexion" class="nav-link">Sign In</a>
				</li>
			</ul>

		</div>

	</nav>


	<div class="container">
		<br><h1 class="text-center text-primary">Discussion</h1><br>
		<div class="discussion" <?php echo "data-id=\"".$_GET['idSujet']."\"";?> >  </div>

		<form action="" id="form-discussion" method="POST">
			<h4>Participez à la discussion ! </h4>
			<div class="form-group col-lg-12">
				<textarea name="content" id="content" class="form-control" placeholder="Votre commentaire"> </textarea>
 			</div>
 			<div class="form-group">
 				<button type="submit" class="btn btn-primary" id="envoi_parent">Commenter</button>
 			</div>
		</form>
	</div>

	<footer style="background-color:rgb(37,42,55);">
		<div class="container">
			<div class="row">
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
	<script src="js/discussion.js"></script>

</body>
</html> 