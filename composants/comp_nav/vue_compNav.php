<?php

class VueNav {

	private $vueNav;
	
	public function __construct(){

		$this->vueNav=self::afficherNav();
	}

	public function getVueNav(){
		return $this->vueNav;
	}

	public function afficherNav() { ?>

		<nav class="navbar navbar-expand-sm navbar-light" style="background-color:rgb(37,42,55);">
		<a href="#" class="navbar-brand px-5">
			<img  src="img/logo.png" alt="logo_nouvelle"/> 
		</a>
		
		<div class="collapse navbar-collapse">
			<ul class="navbar-nav" >
				<li class="nav-item ">
					<a class="nav-link active" aria-current="page" href="index.php">
            			<img src="image-accueil/home.png" width="30" height="30" alt="">
          			</a>
				</li>
				<li class="nav-item">
					<a href="galerie.html" class="nav-link">Anatomie</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Enseignement</a>
				</li>
				<li class="nav-item">
					<a href="index.php?module=quiz" class="nav-link">Quiz</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Dictionnaire</a>
				</li>
				<li class="nav-item">
					<a href="index.php?module=discussion" class="nav-link">Discussion</a>
				</li>
				<li class="nav-item ">
					<a href="#" class="nav-link">Contact</a>
				</li>
			</ul>
			<ul class="navbar-nav ms-auto px-5">
				<li class="nav-item ">
					<a href="#" class="nav-link">Sign Up</a>
				</li>
				<li class="nav-item ">
					<a href="#" class="nav-link">Sign In</a>
				</li>
			</ul>

		</div>

		</nav>

	<?php

	}

}
?>