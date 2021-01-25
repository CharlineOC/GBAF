<?php  
session_start();

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=gbaf;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

/* 

!!! verifier que l'utilisateur existe !!!


si POST n'est pas vide, 
	-> htmlspecialchars de mes donnees
faire requete select pour chercher utilisateur
si on trouve utilisateur -> on stocke les donnees dans une variables (ideal=tableau)
on verifie si password haché de l'user en bdd correspond au password haché entré dans le form de connexion (avec password verify)
	-> si c'est bon, on créé une session avec les donnees de l'user
	(~ 30-40lignes)
*/

if (isset($_POST['pseudo']) AND isset($_POST['motdepasse']))
{

	// Mettre en place variables sécurisées avec htmlspecialchars
	$pseudo = htmlspecialchars($_POST['pseudo']);
	$motdepasse = htmlspecialchars($_POST['motdepasse']);

	//  Récupération de l'utilisateur et de son pass hashé
	$req = $bdd->prepare('SELECT id_user, motdepasse, nom, prenom, pseudo FROM account WHERE pseudo = :pseudo');
	$req->execute(array('pseudo' => $pseudo));
	$resultat = $req->fetch();



	// Comparaison du pass envoyé via le formulaire avec la base
	$isPasswordCorrect = password_verify($motdepasse, $resultat['motdepasse']);

		if (!$resultat)
		{
    		echo 'Mauvais identifiant ou mot de passe !';
		}

		else
		{
		    if ($isPasswordCorrect) 
		    {
		        session_start();
		        $_SESSION['id_user'] = $resultat['id_user'];
		        $_SESSION['nom'] = $resultat['nom'];
		        $_SESSION['prenom'] = $resultat['prenom'];
		        $_SESSION['pseudo'] = $pseudo;

		        header('Location: accueil.php');
		    }

		    else 
		    {
		        echo 'Mauvais identifiant ou mot de passe !';
		    }  
		}
}



?>