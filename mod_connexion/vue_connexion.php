<?php
	
	include_once'vue_generique.php';
	
	class VueConnexion extends VueGenerique {

		public function __construct() {

		}

		function form_connexion(){
			?>
			<link href="./style.css" href="./style_set_connexion.css" rel="stylesheet">
			<form action="index.php?module=connexion&action=connexion" method="post">
				<div class="main">
				 	<div class="col-md-4 border text-center">
				    	<div class="login-form">
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
				    	</div>
				 	</div>
				</div>
			</form>
			<?php
		}

		function form_inscription(){
			?>
			<link href="./style.css" href="./style_set_connexion.css" rel="stylesheet">
			<form action="index.php?module=connexion&action=inscription" method="post">
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
						        	<label>Adresse Mail</label>
						        	<input type="email" class="form-control" placeholder="E-mail">
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
			<?php
		}
		function erreur404($error){
			echo $error;
		}
	}
?>