<?php
if(!defined('CONST_INCLUDE'))
    die('Acces direct interdit !');
?>

<?php
	include_once('cont_lecturePage.php');

	class ModLecture_Page{

		private $controleur;
		
		public function __construct(){
			$this->controleur = new ContLecture_Page();

			if(isset($_GET["action"])){
				$action = $_GET["action"];
			}
			else{
				$action = "page_accueil";
			}

			if(isset($_GET["id"])){
				$titre_page = $_GET["id"];
			}

			switch ($action) {
				case 'page_accueil':
					$this->controleur->page_accueil();
					break;
				case 'lecture_page':
					$this->controleur->lecture($titre_page);
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