<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css" />
		<title>GBAF</title>
		
	</head>

	<body>

	<header>
		
		<p> <img class="logo" src="images/logo_gbaf.png" alt="Logo GBAF" /> </p>


		<!--afficher seulement si session existe : -->


	<?php 
		session_start();
	?>

	<nav>
		<?php    
			if (isset($_SESSION['id_user']) AND isset($_SESSION['nom']) AND isset($_SESSION['prenom']))       
			{     
				echo 'Bonjour ' . $_SESSION['nom'] . ' ' . $_SESSION['prenom'];    
			}   
		?>
			<!-- ???   <?php echo $_POST['nom'], $_POST['prenom']; ?>  ??? -->
			<p><a href="profil.php">Paramètres</a> / <a href="deconnexion.php">Déconnexion</a></p>

	</nav>


	</header>

