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







 <!-- include footer ici -->
<?php
	include "footer.php";
  ?>