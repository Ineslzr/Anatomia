<?php

class VueFormArticle {

	private $vueFormArticle;
	
	public function __construct(){

		$this->vueFormArticle=self::afficherFormArticle();
	}

	public function getVueFormArticle(){
		return $this->vueFormArticle;
	}

	public function afficherFormArticle() { 
		if(isset($_SESSION['nomUtilisateur']) && !empty($_GET['idArticle'])){
		?>
			<div class="container-fluid" style="background-color: #E9E4E4">
		<section class="commentaire">
			<h1 class="title"> Postez un commentaire !</h1>
			<div class="container">
				<div class="contact-form row">

					<form action="" method="post" >
						<div class="form-group col-lg-12">
							<label for="msg">Ajouter un commentaire public </label>
							<textarea class="form-control" rows="5" name="commentaire" id="commentaire"> </textarea>			
						</div>
						<div class="form-field col-lg-12">
							<input class="submit-btn" type="submit" value="submit" <?php echo "name=\"".$_GET['idArticle']."\"";?> id="envoi">
						</div>
					</form>
				</div>
			</div>
		</section>
	<?php } else{
		    if(!empty($_GET['idArticle'])) {
                echo "<p class=\"text-center\"><strong>Pour poster un commentaire vous devez être connecté</strong></p>";
            }
	}
        if(!empty($_GET['idArticle'])) {?>
            <a href="index.php?module=commentaire&action=afficher_commentaire" id="lien_voir_commentaire" <?php echo "name=\"".$_GET['idArticle']."\"";?>>Voir les commentaires</a>
            <div id="commentaires"></div>
        <?php } ?>


	</div>

	<?php
		

	}

}
?>