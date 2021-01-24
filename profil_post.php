<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=gbaf;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}



if (isset(session_start())
	//  Récupération de l'utilisateur et ses données
	$req = $bdd->prepare('SELECT * FROM account WHERE id_user = ($_SESSION['id_user']);
	$req->execute(array('id_user' => $id_user));
	$resultat = $req->fetch();