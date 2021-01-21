
<div class="banner">
	<div class="baniere-top">
		<img src="../image-accueil/baniere.png" class="img-fluid" alt="Responsive image">
	</div>
</div>

<nav class="navbar navbar-expand-md navbar-light bg-light" alt="Responsive image">
	<div class="container-fluid">
    	<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<a class="nav-link active" aria-current="page" href="../index.php">
			<img src="../image-accueil/home.png" width="30" height="30" alt=""></a>
		    <ul class="navbar-nav me-auto mb-2 mb-sm-0">
	    		<li class="nav-item">
	    			<a class="nav-link" href="../galerie.html">Anatomie</a>
	    		</li>
	    		<li class="nav-item">
	    			<a class="nav-link" href="#">Enseignements</a>
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
	    			<a class="nav-link" href="#">Contact</a>
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
		        	<a class="nav-link" href="index.php?module=connexion&action=form_connexion"><NOBR>Se connecter</a>
		        </li>
	   		</ul>
	   </div>
  	</div>
</nav>
<br>
<br>
<br>