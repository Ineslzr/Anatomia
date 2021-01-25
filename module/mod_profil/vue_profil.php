<?php
if(!defined('CONST_INCLUDE'))
	die('Acces direct interdit !');
?>

<?php
	include_once'vue_generique.php';
	
	class VueProfil extends VueGenerique {

		public function __construct() {
			parent::__construct();
		}

		function afficher_profil(){?>
			<div class="container mx-auto">
				<div class="row">
					<div class="col-lg-10">
						<div class="card">
							<div class="pp">
								<div class="circle"><img src="img/site/ajoutez_pp.png" id="photo" >

								</div>

							</div>
							<div class="upload">
								<input type="file" id="file">
								<label for="file" id="uploadBtn">Choose Photo</label>
							</div>
							<div class="info ">
								<h1 class="title">Mon Profil </h1>
								<div class="description_profil ms-5" style="text-align: center;">
									<h2>Mon Compte</h2>
									<p> Nom d'utilisateur : <?php echo $_SESSION['nomUtilisateur']; ?></p>
									<p> Mail : <?php 
                                        echo $_SESSION['email'] ?></p>
									<br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php

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

