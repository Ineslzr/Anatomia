<?php
	include_once'vue_generique.php';
	
	class VueProfil extends VueGenerique {

		public function __construct() {

		}

		function articles_lues($tab) {
			foreach ($tab as $value) {
			    echo "* ".$value["titre_article"]."<br>";
			}
		}
		
		function erreur404($error){
			echo $error;
		}
	}
?>

