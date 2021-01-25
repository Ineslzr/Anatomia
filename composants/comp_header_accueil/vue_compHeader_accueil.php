<?php

class VueHeaderAccueil {

    private $vueNav;

    public function __construct(){

        $this->vueHeader=self::afficherNav();
    }

    public function getVueHeaderAccueil(){
        return $this->vueHeader;
    }

    public function afficherNav() { ?>
        <div class="banner">
            <div class="baniere-top">
                <img src="../img/site/baniere.png" class="img-fluid" alt="Responsive image">
            </div>
        </div>

        <nav class="navbar navbar-expand-md navbar-light bg-light" >
            <?php
            if(isset($_SESSION['nomUtilisateur'])){
                ?>
                <ul class="navbar-nav me-auto mb-2 mb-sm-0" style="margin-right: 10px;">
                    <li class="nav-item">
                        <a href="../index.php" class="nav-link">
                            <img src="../img/site/accueil.png" class="home_img ">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="enseignements" href="index.php?module=lecture_page&action=lecture_page&id=anatomie">Anatomie</a>
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
                            <a class="nav-link" id="contact" href="./module/mod_bbcode/bbcode.html"><NOBR>Poster un article</NOBR></a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
                <ul class="navbar-nav ml-md-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?module=profil&action=afficher_profil">Mon Compte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?module=connexion&action=deconnexion">Déconnexion</a>
                    </li>
                </ul>
                <?php
            }
            else{
                ?>
                <ul class="navbar-nav me-auto mb-2 mb-sm-0" style="margin-left: 10px;">
                    <li class="nav-item">
                        <a href="../index.php" class="nav-link">
                            <img src="../img/site/accueil.png" class="home_img ">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="enseignements" href="index.php?module=lecture_page&action=lecture_page&id=anatomie">Anatomie</a>
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
                <ul class="navbar-nav ml-md-auto" style="margin-right: 10px;">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?module=connexion&action=form_inscription">S'inscrire</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?module=connexion&action=form_connexion"><NOBR>Se connecter</NOBR></a>
                    </li>
                </ul>
                <?php
            }
            ?>
        </nav>
        <br>
        <br>
        <br>

        <?php

    }

}
?>