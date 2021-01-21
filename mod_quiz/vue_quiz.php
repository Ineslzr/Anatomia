<?php
include_once'vue_generique.php';
class VueQuiz extends VueGenerique{

    public function __construct() {
        parent::__construct();
    }


    function afficher_quiz($question,$reponse){ ?>

        <div class="container">
            <br><h1 class="text-center text-primary">QUIZ</h1><br>
            <h2 class="text-center text-success">Bienvenue</h2><br>

            <div class="card">
                <h3 class="text-center card-header">Il n'y a qu'une seule bonne réponse par question, bonne chance!</h3>
            </div><br>
            <div id="quiz">
                <?php
                foreach ($question as $q) {

                    echo "<form action=\"index.php?module=quiz&action=verifierRep\" method=\"POST\" id=\"quest".$q["idQuestion"]."\">";
                    echo "<div class=\"card\">"."<h4 class=\"card-header\">".$q["intitule"]."</h4>";
                    foreach($reponse as $r){
                        if($q["idQuestion"]==$r["idQuestion"]){
                            echo "<div class=\"ms-2\"><input type=\"radio\" name=\"".$q['idQuestion']."\" " ." value=\"".$r['idReponse']."\"". "id=\"rep".$q['idQuestion']."\"><label class=\"ms-1\">".$r['reponse']."</label></div>";
                        }
                    }
                    echo "<div id=\"resultat".$q["idQuestion"]."\""."></div>";
                    echo "<input type=\"submit\" name=\"".$q["idQuestion"]."\" value=\"submit\" class=\"btn btn-success m-auto\" id=\"envoi\"  >";
                    echo "</div></form><br>";

                } ?>
            </div>
        </div>
        <?php

    }
    /*
        function afficher_liste_quiz($tab){
            foreach ($tab as $value){
                echo "<div class=\"card ms-3\" style=\"width: 18rem;\">
                              <img src=\"../img/quiz.jpg\" class=\"card-img-top\" alt=\"img_quiz\">
                              <div class=\"card-body\">
                                <h5 class=\"card-title\">".$value['nom_quiz']."</h5>
                                <a href=\"../quiz.php?idQuiz=".$value['idQuiz']."\" class=\"btn btn-primary \" name=\"".$value['idQuiz']."\" id=\"".$value['idQuiz']."\" onClick=\"get_idQuiz(this.id)\">Faire le quiz</a>
                              </div>
                        </div>";
            }
        }
    */
    function accueil_quiz($tab){
        ?>
        <h1>Testez vos connaissances, faites un Quiz !</h1>
        <div class="container">
            <div id="liste_quiz" class="row">
                <?php
                foreach ($tab as $value){
                    echo "<div class=\"card ms-3\" style=\"width: 18rem;\">
					  			<img src=\"../img/quiz.jpg\" class=\"card-img-top\" alt=\"img_quiz\">
		  						<div class=\"card-body\">
		    						<h5 class=\"card-title\">".$value['nom_quiz']."</h5>
		    						<a href=\"index.php?module=quiz&action=afficher_quiz&idQuiz=".$value['idQuiz']."\" class=\"btn btn-primary \" name=\"".$value['idQuiz']."\" id=\"".$value['idQuiz']."\" onClick=\"get_idQuiz(this.id)\">Faire le quiz</a>
		  						</div>
							</div>";
                }
                ?>


            </div>
        </div>

        <?php

    }
}
?>