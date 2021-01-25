<?php
if(!defined('CONST_INCLUDE'))
    die('Acces direct interdit !');
?>

<?php

	include_once'vue_bbcode.php';
	include_once'modele_bbcode.php';

	class ContBBcode{

		private $modele;
		private $vue;

		function __construct(){
			$this->vue = new VueBBcode();
			$this->modele = new ModeleBBcode();
		}

		function accueil_poster_article() {
			$this->vue->accueil_poster_article();
		}

		function ecrire_article(){
			$this->vue->ecrire_article();
		}

		function ajouter_article(){
			$titre_article = $this->modele->ajouter_article();
			
			if (strlen($titre_article)>0) {
				self::afficher_article($titre_article);
			}
			else{
				$this->vue->ecrire_article();
				$this->vue->erreur_champ();
			}
		}

		function afficher_article($titre_article){
			$article = $this->modele->afficher_article($titre_article);
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