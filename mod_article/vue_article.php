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

		function groupe_article($array_article){
			foreach ($array_article as $value) {
				?>
				
				<?php
			}
		}

		function erreur404($error){
			echo $error;
		}
	}
?>