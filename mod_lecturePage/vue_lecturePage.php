<?php
	include_once'vue_generique.php';

	class VueLecture_Page extends VueGenerique{

		public function __construct(){

		}

		function page_accueil(){
			?>
			<article>
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-10 mx-auto">
							<div>
								<h1>Bienvenue !</h1>
								<p>Petite présentation rapide</p>
								<p>Le corps humain est une structure où se cache bien des phénomènes et mystères scientifiques !</p>

								<p>Nous vous proposons ici quelques articles sur ses différentes parties !</p>

								<p>Vous trouverez dans les différentes rubrique différents aricle sur l'anatomie Humaine</p>

								<p>N'hésitez pas à laisser un commentaire en bas de page d'article ou à nous contacter si vous avez des questions !</p>

								<p>Vous avez aussi la possibilité de faire des petits quizz !</p>

								<h2>Amusez-vous !</h2>
							</div>
							<div>
								<h3>Disclaimer !</h3>
								<p>Nous ne sommes pas des spécialistes en biologie ! Ahaha</p>
								<p>Les articles proposés ont été pris majoritairement sur le site<a href="https://www.passeportsante.net/portail/parties-corps"> Passeport-Santé </a> !</p>
								<p>Pour retrouver l'article complet, veuillez consulter<a href="https://www.passeportsante.net/portail/parties-corps"> Passeport-Santé </a>!</p>
							</div>
						</div>
					</div>
				</div>
			</article>
			<?php
		}

		function lecture($page){
			echo $page;
		}

		function erreur404($error){
			echo $error;
		}
	}
?>