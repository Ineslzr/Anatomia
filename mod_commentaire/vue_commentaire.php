<?php

class VueCommentaire{


	public function __construct() {

	}

	function afficher_commentaire($tab){

		foreach ($tab as $value) {
		    echo $value["auteur_commentaire"]. " le ".$value['date_commentaire'] ."<br>".$value['commentaire']."<br>";
		}

	}

	

}
?>