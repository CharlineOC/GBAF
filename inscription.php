<!-- session start ? + include header ici -->
<?php 
	include "header.php";
 ?>

<div class="pagecentree">
	<p class="pseudo_titre"> 
		Bienvenue ! <br/>
		Veuillez remplir ce formulaire pour vous inscrire : 
	</p>

	<form action="inscription_post.php" method="post">

    	<p>
    		<label for="nom">Nom</label> :<br/> <input class="champsconnexion" type="text" name="nom" id="nom"/><br/>
       		<label for="prenom">Prénom</label> :<br/> <input class="champsconnexion" type="text" name="prenom" id="prenom"/><br/>
        	<label for="pseudo">Pseudonyme</label> :<br/> <input class="champsconnexion" type="text" name="pseudo" id="pseudo"/><br/>
        	<label for="motdepasse">Mot de passe</label> :<br/> <input class="champsconnexion" type="password" name="motdepasse" id="motdepasse"/><br/>
        	<label for="questionsecrete">Question secrète</label> :<br/> <input class="champsconnexion" type="text" name="questionsecrete" id="questionsecrete"/><br/>
        	<label for="reponsesecrete">Réponse à la question secrète</label> :<br/> <input class="champsconnexion" type="text" name="reponsesecrete" id="reponsesecrete"/><br/>
        	<input type="submit" value="Envoyer" />
    	</p>

	</form>

</div>

<!-- include footer ici -->
<?php
	include "footer.php";
  ?>