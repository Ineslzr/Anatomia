<?php
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
			if (isset($_GET["id"])) {
				$titre_article = $_GET["id"];
			}

			switch ($action) {
				case 'page_accueil':
					$this->controleur->page_accueil();
					break;
				case 'lire_article':
					$this->controleur->lire($titre_article);
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