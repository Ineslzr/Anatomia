<?php

include_once 'cont_compAside_article.php';

class ComposantAsideArticle {

	private $controleur;

	public function __construct(){
		$this->controleur=new ControleurAsideArticle();
	}

	function afficherAsideArticle(){
		echo $this->controleur->getVue()->getVueAsideArticle();
	}
}