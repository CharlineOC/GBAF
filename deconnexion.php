<!-- session start ? + include header ici -->
<?php 
	include "header.php";
 ?>



<?php 
session_start();

// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();
?>






 <!-- include footer ici -->
<?php
	include "footer.php";
  ?>

<!--session end-->