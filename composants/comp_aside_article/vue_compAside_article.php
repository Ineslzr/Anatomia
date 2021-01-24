<?php

class VueAsideArticle {

	private $vueAsideArticle;
	
	public function __construct(){

		$this->vueAsideArticle=self::afficherAsideArticle();
	}

	public function getVueAsideArticle(){
		return $this->vueAsideArticle;
	}

	public function afficherAsideArticle() { ?>

		<aside class="col-lg-3 col-md-2 ms-auto pt-5">
			<h3> Découvrez nos<br> autres articles ! </h3>
			<div class="single-content">
				<img src="../img/anatomie/cerveau.jpeg" alt="cerveau">
				<div class="text-content">
					<a href="index.php?module=lire_article&action=lire_article&idArticle=2"><h4>Le cerveau</h4></a>
				</div>
			</div>
	
			<div class="single-content">
				<img src="../img/anatomie/poumon_miniature.jpg" alt="poumon">
				<div class="text-content">
					<a href="index.php?module=lire_article&action=lire_article&idArticle=4"><h4>Les poumons</h4></a>
				</div>
			</div>
		
			<div class="single-content">
				<img src="../img/anatomie/foie_bleu.jpg" alt="sys_dig">
				<div class="text-content">
					<a href="index.php?module=lire_article&action=lire_article&idArticle=4"><h4>Le foie</h4></a>
				</div>
			</div>
		
			<div class="single-content">
				<img src="../img/anatomie/systeme_digestif.jpg" alt="genou">
				<div class="text-content">
					<a href="index.php?module=lire_article&action=lire_article&idArticle=4"><h4>Le système digestif</h4></a>
				</div>
			</div>
			<br>
			<br>
			<h3>Faites un quiz ! </h3>

			<div class="single-content">
				<img src="../img/site/quiz.jpg" alt="quiz">
				<div class="text-content">
					<a href="#"><h4>Quiz n°1</h4></a>
				</div>
			</div>

			<div class="single-content">
				<img src="../img/site/quiz.jpg" alt="quiz">
				<div class="text-content">
					<a href="#"><h4>Quiz n°2</h4></a>
				</div>
			</div>

			<div class="single-content">
				<img src="../img/site/quiz.jpg" alt="quiz">
				<div class="text-content">
					<a href="#"><h4>Quiz n°3</h4></a>
				</div>
			</div>

			<div class="single-content">
				<img src="../img/site/quiz.jpg" alt="quiz">
				<div class="text-content">
					<a href="#"><h4>Quiz n°4</h4></a>
				</div>
			</div>
		</aside>
	</div>
</div>

	<?php

	}

}
?>