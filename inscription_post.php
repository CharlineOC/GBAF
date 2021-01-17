<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=gbaf;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion des données
$req = $bdd->prepare('INSERT INTO account (nom, prenom, pseudo, motdepasse, questionsecrete, reponsesecrete) VALUES(?, ?, ?, ?, ?, ?)');
//hachage mdp
$req->execute(array($_POST['nom'], $_POST['prenom'], $_POST['pseudo'], $_POST['motdepasse'], $_POST['questionsecrete'], $_POST['reponsesecrete']));


// Redirection du visiteur vers la page d'accueil
header('Location: accueil.php');
?>