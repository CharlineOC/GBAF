<!-- session start ? + include header ici -->
<?php 
	include "header.php";
 ?>


<h2>Changez vos paramètres: </h2>


<p>Changez votre nom :</p>

	<form action="profil_post.php" method="post">

		<p>
			<label for="nom">Nom</label> : <input type="text" name="nom" id="nom"/><br/>
			<label for="prenom">Prénom</label> : <input type="text" name="prenom" id="prenom"/><br/>
			<label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo"/><br/>
			<label for="motdepasse">Mot de passe</label> : <input type="password" name="motdepasse" id="motdepasse"/><br/>
			<label for="questionsecrete">Question secrète</label> : <input type="text" name="questionsecrete" id="questionsecrete"/><br/>
			<label for="reponsesecrete">Réponse à la question secrète</label> : <input type="text" name="reponsesecrete" id="reponsesecrete"/><br/>
			<input type="submit" value="Envoyer" />
		</p>

	</form>



 <!-- include footer ici -->
<?php
	include "footer.php";
  ?>