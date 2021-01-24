<!-- session start ? + include header ici -->
<?php 
	include "header.php";
 ?>



<?php

// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();

header('Location: index.php')
?>






 <!-- include footer ici -->
<?php
	include "footer.php";
  ?>

<!--session end-->