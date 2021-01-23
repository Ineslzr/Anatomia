<?php 

include_once 'modele_compAside_article.php';
include_once 'vue_compAside_article.php';

class ControleurAsideArticle {

	private $modele;
	private $vue;

	public function __construct(){

		$this->vue = new VueAsideArticle();
		$this->modele = new ModeleAsideArticle();
	}

	public function afficherAsideArticle() {
		$this->vue->afficherAsideArticle();
	}

	function getVue(){
		return $this->vue;
	}

}