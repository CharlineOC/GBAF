<!-- session start ? + include header ici -->
<?php 
	include "header.php";
 ?>


<form action="motdepasseoublie_post.php" method="post">

		<p>
			
			<label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo"/><br/>
			<input type="submit" value="Envoyer" />
		</p>

</form>




 <!-- include footer ici -->
<?php
	include "footer.php";
  ?>