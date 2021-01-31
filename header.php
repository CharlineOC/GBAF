	<?php 
		session_start();
	?>

<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css" />
		<title>GBAF</title>
		
	</head>

	<body>

	<header>
		
		<?php    
			if (isset($_SESSION['id_user']) AND isset($_SESSION['nom']) AND isset($_SESSION['prenom']))       
			{   
		?>  
		<nav>
			<p> <a href="accueil.php"><img class="logo" src="images/logo_gbaf.png" alt="Logo GBAF" /></a> </p>

		<?php
				echo '<p class="bonjour">Bonjour ' . $_SESSION['nom'] . ' ' . $_SESSION['prenom'] . '<br/>';    
		?>
			<a href="profil.php">Paramètres</a> / <a href="deconnexion.php">Déconnexion</a></p>
		</nav>
		<?php
			}  
			else
			{
		?>
			<p> <a href="index.php"><img class="logo" src="images/logo_gbaf.png" alt="Logo GBAF" /></a> </p>
		<?php
			}
		?>
			



	</header>

