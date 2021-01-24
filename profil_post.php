<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=gbaf;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

//récupérer user dans bdd qui correspond a user connecté
//faire un if qui compare prenom user dans bdd avec prenom reçu dans form
//si différent (!=) j'appelle une fonction, et cette fonction (par ex update_user_prenom) va s'occuper d'update l'user dans bdd avec le prenom entré
//if 
//if
//if
//jusqu'a fin 

//  Récupération de l'utilisateur et ses données
$req = $bdd->prepare('SELECT * FROM account WHERE id_user = :id_user');
$req->execute(array('id_user' => $_SESSION['id_user']));
$resultat = $req->fetch();