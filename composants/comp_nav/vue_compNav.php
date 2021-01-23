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

        <nav class="navbar navbar-expand-md navbar-light" style="background-color: rgb(37,42,55);">
            <a href="index.php" class="navbar-brand px-5">
                <img  src="img/site/logo.png" alt="logo_nouvelle"/>
            </a>
            <div class="collapse navbar-collapse">
                <?php
                if(isset($_SESSION['nomUtilisateur'])){
                    ?>
                    <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                        <li class="nav-item">
                            <a href="../index.php" class="nav-link">
                                <img src="../img/site/home.png" class="home_img ">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../galerie.html">Anatomie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="enseignements" href="index.php?module=lecture_page&action=lecture_page&id=enseignements">Enseignements</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?module=quiz">Quiz</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?module=dictionnaire" class="nav-link">Dictionnaire</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?module=discussion">Discussion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact" href="index.php?module=lecture_page&action=lecture_page&id=contact">Contact</a>
                        </li>
                        <?php
                        if($_SESSION['role']==1){
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" id="contact" href="index.php?module=ajout_article&action=accueil_poster_article"><NOBR>Poster un article</NOBR></a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                    <ul class="navbar-nav ml-md-auto">
                        <li class="nav-item">
                            <a class="nav-link\" href="../monProfil.php">Mon Compte</a>
                        </li>
                    </ul>
                    <?php
                }
                else{
                    ?>
                    <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                        <li class="nav-item">
                            <a href="../index.php" class="nav-link">
                                <img src="../img/site/home.png" class="home_img ">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../galerie.html">Anatomie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="enseignements" href="index.php?module=lecture_page&action=lecture_page&id=enseignements">Enseignements</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?module=quiz">Quiz</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?module=dictionnaire" class="nav-link">Dictionnaire</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?module=discussion">Discussion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact" href="index.php?module=lecture_page&action=lecture_page&id=contact">Contact</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-md-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?module=connexion&action=form_inscription">S'inscrire</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?module=connexion&action=form_connexion"><NOBR>Se connecter</NOBR></a>
                        </li>
                    </ul>
                </div>
                    <?php
                }
                ?>
        </nav>

	<?php

	}

}
?>