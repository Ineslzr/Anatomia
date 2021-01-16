<?php

class VueCommentaire{


	public function __construct() {

	}

	function afficher_commentaire($tab){

		foreach ($tab as $value) {
			echo "<div class=\"card\"><div class=\"card-body\">";
		    echo $value["auteur_commentaire"]. " le ".$value['date_commentaire'] ."<br>".$value['commentaire']."</div></div><br>";
		}

	}

	function articles_lues($tab) {
		foreach ($tab as $value) {
		    echo $value["titre_article"]."<br>";
		}
	}

}
?>

