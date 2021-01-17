<!-- session start ? + include header ici -->
<?php 
	include "header.php";
 ?>

<p> 
	Bienvenue ! <br/>
	Veuillez vous connecter pour accéder au contenu du site : 
</p>

<form action="connexion_post.php" method="post">

	<p>
		<label for="pseudo">Pseudonyme</label> : <input type="text" name="pseudo" id="pseudo"/><br/>
		<label for="motdepasse">Mot de passe</label> : <input type="password" name="motdepasse" id="motdepasse"/><br/>
		<input type="submit" value="Envoyer" />
	</p>

</form>


<p>
	<a href="motdepasseoublie.php">Mot de passe oublié ?</a>
</p>

<p>
	Vous n'avez pas encore de compte? <a href="inscription.php">Inscrivez-vous ici !</a>
</p>

<!-- include footer ici -->
<?php
	include "footer.php";
  ?>