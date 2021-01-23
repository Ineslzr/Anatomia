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
			else{
				$this->controleur->erreur404(); 
			}
			if (isset($_GET["name"])) {
				$section = $_GET["name"];
			}
			else{
				$this->controleur->erreur404(); 
			}

			switch ($action) {
				case 'page_accueil':
					$this->controleur->page_accueil();
					break;
				case 'lire_article':
					$this->controleur->lire($titre_article);
					break;
				case 'groupe_article':
					$this->controleur->groupe_article($section);
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