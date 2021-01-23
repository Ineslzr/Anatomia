<?php
    if(!defined('CONST_INCLUDE'))
        die('Acces direct interdit !');


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

		function lire(){
            $article = $this->modele->lecture();
            $this->vue->lecture($article);
		}

        function afficher_liste_article(){
            $articles=$this->modele->get_liste_article();
            $this->vue->afficher_liste_article($articles);
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