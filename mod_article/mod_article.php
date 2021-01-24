<?php
if(!defined('CONST_INCLUDE'))
    die('Acces direct interdit !');

	include_once ('cont_article.php');

	class ModArticle{

		private $controleur;
		
		public function __construct(){
			$this->controleur = new ContArticle();
			
			if(isset($_GET["action"])){
				$action = $_GET["action"];
			}
			else{
				$action = "page_accueil";
			}

			switch ($action) {
				case 'page_accueil':
					$this->controleur->page_accueil();
					break;
                case 'afficher_liste_article':
                    $this->controleur->afficher_liste_article();
                    break;
				case 'lire_article':
					$this->controleur->lire();
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