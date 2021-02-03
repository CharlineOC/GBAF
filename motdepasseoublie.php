<!-- session start ? + include header ici -->
<?php 
	include "header.php";
 ?>

<div class="pagecentree">

<p class="pseudo_titre">Pour vérifier que vous avez déjà un compte, veuillez indiquer votre identifiant :</p>

<form action="motdepasseoublie_post.php" method="post">

		<p>
			
			<label for="pseudo">Pseudo</label> : <input type="text" class="champsconnexion" name="pseudo" id="pseudo"/><br/>
			<input type="submit" value="Envoyer" />
		</p>

</form>
</div>



 <!-- include footer ici -->
<?php
	include "footer.php";
  ?>