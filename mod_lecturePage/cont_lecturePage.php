<?php
	include_once ('vue_lecturePage.php');
	include_once ('modele_lecturePage.php');

	class ContLecture_Page{
		
		private $modele;
		private $vue;

		function __construct(){
			$this->vue = new VueLecture_Page();
			$this->modele = new ModeleLecture_Page();
		}

		function page_accueil(){
			$this->vue->page_accueil();
		}

		function lecture($titre_page){
			$contenu_page = $this->modele->lecture($titre_page);
			$this->vue->lecture($contenu_page);
		}

		function erreur404(){
			$error = $this->modele->erreur404();
			$this->vue->erreur404($error);
		}

		function getVue(){
            return $this->vue;
        }
	}
?>