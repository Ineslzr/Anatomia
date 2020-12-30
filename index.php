<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<header>
		<?php
			/*INES*/
			//require_once('C:/wamp64/www/...../set_accueil/header.php');
			/*DARINA*/
			//require_once('C:/wamp64/www/Home/set_accueil/header.php');

			require_once('connexionBD.php');

			Connexion::initConnexion();

			$module = isset($_GET['module']) ? $_GET['module']: "accueil";
			switch ($module) {
				case 'connexion':
					/*INES*/
					//include 'C:/wamp64/www/.....mod_connexion/mod_connexion.php';
					/*DARINA*/
					include 'C:/wamp64/www/Home/mod_connexion/mod_connexion.php';
					$module = new ModConnexion();
					break;
				case 'accueil':
					/*INES*/
					//include 'C:/wamp64/www/...../set_accueil/accueil.php';
					/*DARINA*/
					require 'C:/wamp64/www/Home/set_accueil/accueil.php';
					break;
				default:
					die("Interdiction d'accès à ce module");
			}
		?>
	</header>

</body>
</html>

		