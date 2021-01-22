
<div class="banner">
	<div class="baniere-top">
		<img src="../image-accueil/baniere.png" class="img-fluid" alt="Responsive image">
	</div>
</div>

<nav class="navbar navbar-expand-md navbar-light bg-light">
	<div class="container-fluid">
		    <ul class="navbar-nav me-auto mb-2 mb-sm-0">
		    	<li class="nav-item">
		    		<a href="../index.php">
						<img src="../image-accueil/home.png" class="home_img">
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
                    <a class="nav-link" href="#">Dictionnaire</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?module=discussion">Discussion</a>
	    		</li>
	    		<li class="nav-item">
	    			<a class="nav-link" id="contact" href="index.php?module=lecture_page&action=lecture_page&id=contact">Contact</a>
    			</li>
    			<li class="nav-item">
	    			<a class="nav-link" href="index.php?module=ajout_article"><NOBR>Poster un article</NOBR></a>
	    		</li>
		    </ul>
		    <u>
		    	
		    </u>
	   		<ul class="navbar-nav ml-md-auto">
                <?php
                    if(isset($_SESSION['nomUtilisateur'])){
                        echo "<li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"../monProfil.php\">Mon Compte</a>
                                </li>";
                    }
                ?>
		        <li class="nav-item">
		        	<a class="nav-link" href="index.php?module=connexion&action=form_inscription">S'inscrire</a>
		        </li>
		        <li>
		        	<a class="nav-link" href="index.php?module=connexion&action=form_connexion"><NOBR>Se connecter</NOBR></a>
		        </li>
	   		</ul>
	   </div>
  	</div>
</nav>
<br>
<br>
<br>