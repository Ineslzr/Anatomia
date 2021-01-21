<?php session_start(); ?>

<?php
/*require './set_accueil/accueil.php';*/
require_once "connexionBD.php";
Connexion::initConnexion();

$module = isset($_GET['module']) ? $_GET['module']: "accueil";
switch($module) {
    case "commentaire" :
        include "./mod_commentaire/mod_commentaire.php";
        $module=new ModCommentaire();
        break;

    case "connexion":
        include "./mod_connexion/mod_connexion.php";
        $module=new ModConnexion();
        break;

    case "quiz":
        $title="Quiz";
        include "./composants/comp_nav/comp_nav.php";
        $nav = new ComposantNav();
        include "./mod_quiz/mod_quiz.php";
        $module=new ModQuiz();
        $jquery="./js/jquery-3.5.1.min.js";
        $js="./js/quiz.js";
        break;

    case "profil":
        include "./mod_profil/mod_profil.php";
        $module=new ModProfil();
        break;

    case "discussion":
        $title="Discussion";
        include "./composants/comp_nav/comp_nav.php";
        $nav = new ComposantNav();
        include "./mod_discussion/mod_discussion.php";
        $module=new ModDiscussion();
        $jquery="./js/jquery-3.5.1.min.js";
        $js="./js/discussion.js";
        break;
    case 'accueil':
        require './set_accueil/accueil.php';
        break;

    default :
        die ("Interdiction d'accès à ce module");
}

require("template.php");

?>

