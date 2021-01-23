<?php
	include_once('vue_article.php');
	include_once('modele_article.php');

	class ContArticle {

		private $modele;
		private $vue;

		function __construct(){
			$this->vue = new VueArticle();
			$this->modele = new ModeleArticle();
		}

		function page_accueil(){
			$this->vue->page_accueil();
		}

		function lire($section,$titre_article){
			$article = $this->modele->lecture($titre_article);
			$this->vue->lecture($article);
		}

		function groupe_article($section){
			$array_article = $this->modele->groupe_article($section);
			$this->vue->groupe_article($array_article);
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