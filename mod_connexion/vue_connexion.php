<?php

	class VueConnexion {

		public function __construct() {

		}

		function form_connexion(){

			/*echo "<form action=\"index.php?module=connexion&action=connexion\" method=\"post\">
				<p>Nom d'utilisateur : <input type=\"text\" name=\"nomUtilisateur\" /></p>
				<p>Mot de passe : <input type=\"password\" name=\"password\" /></p>
				
				<p><input type=\"submit\" value=\"OK\"></p>
			</form>";*/

			/*INES*/
			//require_once('C:/wamp64/www/......');
			/*DARINA*/
			require_once('C:/wamp64/www/Home/set_connexion/connexion.php');
		}

		function form_inscription(){

			/*echo "<form action=\"index.php?module=connexion&action=inscription\" method=\"post\">
				<p>Nom d'utilisateur : <input type=\"text\" name=\"nomUtilisateur\" id=\"username\"/></p>
				<p>Mot de passe : <input type=\"password\" name=\"password\"  id=\"password\" /></p>
				<p>Email :<input type=\"email\" name=\"email\" id=\"email\" /></p>
				
				<p><input type=\"submit\" value=\"OK\"></p>
			</form>";*/

			/*INES*/
			//require_once('C:/wamp64/www/......');
			/*DARINA*/
			require_once('C:/wamp64/www/Home/set_connexion/inscription.php');
		}

	}
?>