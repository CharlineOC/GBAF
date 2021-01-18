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


		<!--afficher seulement si connecté : -->
		<nav>
			<p>Bonjour, $nom $prenom !</p>  <!-- ???   <?php echo $_POST['nom'], $_POST['prenom']; ?>  ??? -->
			<p><a href="parametresprofil.php">Paramètres</a> / <a href="deconnexion.php">Déconnexion</a></p>

		</nav>

	</header>

