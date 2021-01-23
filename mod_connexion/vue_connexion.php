<?php

if(!defined('CONST_INCLUDE'))
    die('Acces direct interdit !');
	
	include_once'vue_generique.php';
	
	class VueConnexion extends VueGenerique {

		public function __construct() {
            parent::__construct();
		}

		function form_connexion(){
			?>
            <div class="container">
                <div class="row">
                    <div class="col col-lg-7 col-md-8 mx-auto" style="justify-content: center;">
			<form action="index.php?module=connexion&action=connexion" method="post"  class="col-lg-8 mx-auto">

					    	<div class="login-form" style="background-color: #252a37; padding: 30px; text-align: center; color: white; border-radius: 30px;">
					    		<h2>Connectez-vous !</h2>
					    		<br>
						        <div class="form-group">
						            <label>Nom d'utilisateur</label>
						            <input type="text" name="nomUtilisateur" class="form-control col-md-2" placeholder="Pseudo" style="">
						        </div>
						        <br>
					          	<div class="form-group">
					             	<label>Mot de passe</label>
					             	<input type="password" name="password" class="form-control" placeholder="Mot de passe">
					         	</div>
					         	<br>
					          	<button type="submit" class="btn btn-black" style="background-color: #f4d529;color: #252a37; border: solid;">Login</button>
					          	<br>
					    	</div>
            </form>
					 	</div>
					</div>
				</div>

			
			<?php
		}

		function form_inscription(){
			?>
			<form action="index.php?module=connexion&action=inscription" method="post">
				<div class="container">
					<div class="row">
						<div class="col-lg-7 col-md-8 mx-auto" style="justify-content: center;">
					    	<div class="login-form" style="background-color: #252a37; padding: 30px; text-align: center; color: white; border-radius: 30px;">
					    		<h2>Inscrivez-vous !</h2>
					    		<br>
						        <div class="form-group">
						            <label>Nom d'utilisateur</label>
						            <input type="text" name="nomUtilisateur" class="form-control" placeholder="Pseudo">
						        </div>
						        <br>
						        <div class="form-group">
						        	<label>Adresse Mail</label>
						        	<input type="email" name="email" class="form-control" placeholder="E-mail">
						        </div>
						        <br>
					          	<div class="form-group">
					             	<label>Mot de passe</label>
					             	<input type="password" name="password" class="form-control" placeholder="Mot de passe">
					         	</div>
					         	<br>
					          	<button type="submit" class="btn btn-black" style="background-color: #f4d529;color: #252a37; border: solid;">Sign in</button>
					          	<br>
				    		</div>
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