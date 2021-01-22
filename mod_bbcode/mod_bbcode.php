<?php

	include_once 'cont_bbcode.php';

	class ModBBcode{
		
		private $controleur;

		public function __construct(){
			
			$this->controleur = new ContBBcode();

			if(isset($_GET["action"])){
				$action = $_GET["action"];
			}
			else{
				$action = "accueil_poster_article";
			}

			switch ($action) {
				case 'accueil_poster_article':
					$this->controleur->accueil_poster_article();
					break;
				case 'ecrire_article':
					$this->controleur->ecrire_article();
					break;
				case 'ajouter_article':
					$this->controleur->ajouter_article();
					break;
				case 'afficher_article':
					$this->controleur->afficher_article();
					break;
				case 'encoder':
					$this->controleur->encoder();
					break;
				case 'decoder':
					$this->controleur->decoder();
					break;
				default:
					$this->controleur->erreur404(); 
					break;
			}
		}
		
		function getControleur(){
	        return $this->controleur;
	    }
	}
?>