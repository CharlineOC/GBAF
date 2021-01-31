<!-- session start ? + include header ici -->
<?php 
	include "header.php";
 ?>


<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=gbaf;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
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