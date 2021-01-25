<?php

include_once 'cont_compForm_article.php';

class ComposantFormArticle{

	private $controleur;

	public function __construct(){
		$this->controleur=new ControleurFormArticle();
	}

	function afficherFormArticle(){
		echo $this->controleur->getVue()->getVueFormArticle();
	}
}