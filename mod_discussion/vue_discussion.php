<?php
    include_once'vue_generique.php';

    class VueDiscussion extends VueGenerique{

        public function __construct() {
            parent::__construct();
        }

        function afficher_discussion($messageParent,$messageChildren){
            ?>
            <div class="container">
                <br><h1 class="text-center text-primary">Discussion</h1><br>
                <h2 class="text-center text-success">Sujet : test de discussion</h2><br>

                <div class="discussion" <?php echo "data-id=\"".$_GET['idSujet']."\"";?>>
                <?php
                    foreach ($messageParent as $p) {
                        echo "<br><div name=\"".$p["idMessage"]."\" id=\"".$p["idMessage"]."\">";
                        echo "<div class=\"card\"> <div class=\"card-header\">";
                        echo $p["auteur_message"]. " le ".$p['date_message'] ."</div><br>".$p['message']."<div class=\"form-group\"> <button type=\"submit\" class=\"btn btn-primary\" name=\"".$p["idMessage"]."\" id=\"repondre\">Répondre</button></div><br><div class=\"form_reponse".$p['idMessage']."\"></div>";

                        echo "</div>";
                        foreach ($messageChildren as $c) {
                            if($c['parent_id'] == $p['idMessage']){
                                echo "<div id=\"reponse".$p["idMessage"]."\" class=\"card card-body ms-5\">";
                                echo $p["auteur_message"]. " le ".$c['date_message'] ."<br>".$c['message']."</div>";
                            }
                        }
                        echo  "</div>";
                    }
                ?>
                </div>

                <?php if(isset($_SESSION['nomUtilisateur'])){ ?>

                    <form action="" id="form-discussion" method="POST">
                        <h4>Participez à la discussion ! </h4>
                        <div class="form-group col-lg-12">
                            <textarea name="content" id="content" class="form-control" placeholder="Votre commentaire"> </textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" id="envoi_parent">Commenter</button>
                        </div>
                    </form>
                <?php } else{
                    echo "<p style=\"font-weight:bold;\" class=\"ms-5\">Pour poster un message, vous devez vous connecter</p>";
                } ?>
            </div>
            <?php
        }

        function accueil_discussion($tab){
            ?>
            <h1>Participer à une discussion</h1>
            <div class="container">
                <p>Bienvenue dans l'espace discussion, ici vous pouvez discuter avec d'autre autour de nombreux sujets, vous pouvez même proposer un sujet de discussion<p>

                    <?php if(isset($_SESSION['nomUtilisateur'])){ ?>

                <form action="" id="form-discussion" method="POST">
                    <h4>Participez à la discussion ! </h4>
                    <div class="form-group col-lg-12">
                        <textarea name="content" id="content" class="form-control" placeholder="Votre commentaire"> </textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" id="envoi_parent">Commenter</button>
                    </div>
                </form>
                <?php } else{
                    echo "<p style=\"font-weight:bold;\" class=\"ms-5\">Pour poster un message, vous devez vous connecter</p>";
                } ?>
                <br>

                <div id="liste_discussion" class="row">
            <?php
                foreach($tab as $value) {
                    echo "<div class=\"card mt-3\">
    						<div class=\"card-header\">".$value['titre_sujet']."</div>
    						<div class=\"card-body\">
    						<h5 class=\"card-title\">Proposé le : ".$value['date_sujet']."</h5>
    						<a href=\"index.php?module=discussion&action=afficher_discussion&idSujet=".$value['idSujet']."\" class=\"btn btn-primary\">Discuter !</a>
    						</div>
                        </div>";
                }
            ?>
                </div>
            </div>
            <?php
        }

        function erreur404($error){
            echo $error;
        }

    }
?>

