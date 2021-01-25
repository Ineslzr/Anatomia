<?php session_start();

define('CONST_INCLUDE', NULL);
?>

<?php

    require_once "connexionBD.php";
    Connexion::initConnexion();

    $module = isset($_GET['module']) ? $_GET['module']: "accueil";
    
    switch($module) {
        case "commentaire" :
            include "./module/mod_commentaire/mod_commentaire.php";
            $module=new ModCommentaire();
            break;

        case "connexion":
            $title="Connexion/Inscription";
            $css="./css/style_set_connexion.css";
            include "./composants/comp_nav/comp_nav.php";
            $nav = new ComposantNav();
            include "./module/mod_connexion/mod_connexion.php";
            $module=new ModConnexion();
            include "./composants/comp_footer/comp_footer.php";
            $footer=new ComposantFooter();
            break;

        case "dictionnaire":
            $title="Dictionnaire";
            $css="./css/styleDictionnaire.css";
            include "./composants/comp_nav/comp_nav.php";
            $nav = new ComposantNav();
            include "./module/mod_dictionnaire/mod_dictionnaire.php";
            $module=new ModDictionnaire();
            $js="./js/dictionnaire.js";
            include "./composants/comp_footer/comp_footer.php";
            $footer=new ComposantFooter();
            break;

        case "quiz":
            $title="Quiz";
            $css="./css/styleQuiz.css";
            include "./composants/comp_nav/comp_nav.php";
            $nav = new ComposantNav();
            include "./module/mod_quiz/mod_quiz.php";
            $module=new ModQuiz();
            $jquery="./js/jquery-3.5.1.min.js";
            $js="./js/quiz.js";
            include "./composants/comp_footer/comp_footer.php";
            $footer=new ComposantFooter();
            break;

        case "profil":
            $title="Mon compte";
            $css="./css/styleProfile.css";
            include "./composants/comp_nav/comp_nav.php";
            $nav = new ComposantNav();
            include "./module/mod_profil/mod_profil.php";
            $module=new ModProfil();
            $js="./js/monProfil.js";
            include "./composants/comp_footer/comp_footer.php";
            $footer=new ComposantFooter();
            break;

        case 'ajout_article':
            include './module/mod_bbcode/mod_bbcode.php';
            $module = new ModBBcode();
            break;

        case 'lecture_page':
            $title="Page";
            $css="./css/stylePage.css";
            include "./composants/comp_nav/comp_nav.php";
            $nav = new ComposantNav();
            include './module/mod_lecturePage/mod_lecturePage.php';
            $module = new ModLecture_Page();
            include "./composants/comp_footer/comp_footer.php";
            $footer=new ComposantFooter();
            break;

        case 'lire_article':
            $title="Article";
            $css="./css/styleArticle.css";
            include "./composants/comp_nav/comp_nav.php";
            $nav = new ComposantNav();
            include './module/mod_article/mod_article.php';
            $module = new ModArticle();
            include "./composants/comp_aside_article/comp_aside_article.php";
            $aside = new ComposantAsideArticle();
            include "./composants/comp_form_article/comp_form_article.php";
            $form=new ComposantFormArticle();
            $jquery="./js/jquery-3.5.1.min.js";
            $js="./js/commentaire.js";
            include "./composants/comp_footer/comp_footer.php";
            $footer=new ComposantFooter();
            break;

        case "discussion":
            $title="Discussion";
            $css="./css/styleDiscussion.css";
            include "./composants/comp_nav/comp_nav.php";
            $nav = new ComposantNav();
            include "./module/mod_discussion/mod_discussion.php";
            $module=new ModDiscussion();
            $jquery="./js/jquery-3.5.1.min.js";
            $js="./js/discussion.js";
            include "./composants/comp_footer/comp_footer.php";
            $footer=new ComposantFooter();
            break;
            
        case 'accueil':
            $title="Accueil";
            $css="./css/style.css";
            include "./composants/comp_header_accueil/comp_header_accueil.php";
            $nav = new ComposantHeaderAccueil();
            require './set_accueil/accueil.php';
            include "./composants/comp_footer_accueil/comp_footer_accueil.php";
            $footer=new ComposantFooterAccueil();
            break;

        default :
            die ("Interdiction d'accès à ce module");
    }

    require("template.php");

?>

