<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link href="style.css" href="style_set_connexion.css" rel="stylesheet">

	<title>Connexion</title>
</head>
	<body>
		<header>
			<?php
				
			?>
		</header>
		<form action="index.php?module=connexion&action=connexion" method="post">
			<div class="main">
			 	<div class="col-md-4 border text-center">
			    	<div class="login-form">
			       		<form>
					        <div class="form-group">
					            <label>Nom d'utilisateur</label>
					            <input type="text" class="form-control" placeholder="Pseudo">
					        </div>
					        <br>
				          	<div class="form-group">
				             	<label>Mot de passe</label>
				             	<input type="password" class="form-control" placeholder="Mot de passe">
				         	</div>
				         	<br>
				          	<button type="submit" class="btn btn-black" style="border: solid;">Login</button>
				          	<br>
			       		</form>
			    	</div>
			 	</div>
			</div>
		</form>
		<footer>
			<br>
			<?php
	    		
	    	?>
		</footer>
	</body>
</html>

