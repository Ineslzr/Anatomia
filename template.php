<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
        <?php if (!empty($title)) {
                echo $title;
            } 
        ?>
        </title>
        <LINK href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <LINK href="../css/styleArticle.css" rel="stylesheet">
        <!--<link rel="stylesheet" href="css/stylegalerie.css">-->
        <link href="./style.css" href="./style_set_connexion.css" rel="stylesheet">
    </head>
    <body>

        <?php
            if (isset($nav)) {
                echo $nav->afficherNav();
            }
            if (isset($module)) {
                echo $module->getControleur()->getVue()->getAffichage();
            }

            if (isset($jquery)) {
                if (isset($js)) {
                    echo "<script src=\"".$jquery."\"></script> <script src=\"".$js."\"></script>";
                }
            }
        ?>
    </body>
</html>