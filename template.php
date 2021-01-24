<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            <?php 
            if (isset($title)) {
                echo $title;
            } 
            ?>
        </title>
        <LINK href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <LINK 
            <?php 
            if (isset($css)) {
                echo "href=\"".$css."\"";
            } 
            ?> rel="stylesheet">
        <!--<link rel="stylesheet" href="css/stylegalerie.css">-->
    </head>
    <body>

        <?php
        if(isset($nav)){
            echo $nav->afficherNav();
        }
        if(isset($module)){
            if($module != "accueil"){
                echo $module->getControleur()->getVue()->getAffichage();
            }
        }
        if(isset($aside)){
            echo  $aside->afficherAsideArticle();
        }
        if(isset($jquery)){
            echo "<script src=\"".$jquery."\">";
        }
        if(isset($js)){
            echo "<script src=\"".$js."\">";
        }
        if(isset($footer)){
            echo $footer->afficherFooter();
        }
        ?>
    </body>
</html>