<?php
	include_once'vue_generique.php';

	class VueArticle extends VueGenerique{
		
		public function __construct(){
			# code...
		}

		function page_accueil(){

		}

		function lecture($page){
			echo $page;
		}

		function erreur404($error){
			echo $error;
		}

		function erreur404($error){
			echo $error;
		}
	}
?>