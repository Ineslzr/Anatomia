<?php 

include_once 'modele_compForm_article.php';
include_once 'vue_compForm_article.php';

class ControleurFormArticle {

	private $modele;
	private $vue;

	public function __construct(){

		$this->vue = new VueFormArticle();
		$this->modele = new ModeleFormArticle();
	}

	public function afficherFormArticle() {
		$this->vue->afficherFormArticle();
	}

	function getVue(){
		return $this->vue;
	}

}