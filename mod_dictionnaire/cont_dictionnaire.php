<?php
	if(!defined('CONST_INCLUDE'))
		die('Acces direct interdit !');
	
	include_once'vue_dictionnaire.php';
	include_once'modele_dictionnaire.php';

class ContDictionnaire {

		private $modele;
		private $vue;

		function __construct(){

			$this->vue = new VueDictionnaire();
			$this->modele = new ModeleDictionnaire();

		}	

		function accueil_dictionnaire(){
			$tab=$this->modele->get_mot();
			$this->vue->accueil_dictionnaire($tab);
		}

		function afficher_definition(){
			$mot=$this->modele->get_definition();
			$this->vue->afficher_definition($mot);
		}

		function getVue(){
			return $this->vue;
		}


}

?>