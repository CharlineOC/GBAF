<?php 
	include "header.php";
?>


<p>Veuillez changer votre mot de passe :</p>

<form action="nouveaumotdepasse_post.php" method="post">

		<p>
			<input type="hidden" name="id_user" value="<?php echo $_GET['id_user']; ?>"/>
			<label for="nouveaumotdepasse">Entrez un nouveau mot de passe</label> : <input type="password" name="nouveaumotdepasse" id="nouveaumotdepasse"/><br/>
			<input type="submit" value="Envoyer" />
		</p>

</form>
