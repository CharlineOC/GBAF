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
?>


<?php

/*enregistrer vote (insert into vote ) */
$id_acteur=$_GET['acteur'];
$vote=$_GET['vote'];
$id_user=$_SESSION['id_user'];

	$vote_post=$bdd->prepare('INSERT INTO vote(id_user, id_acteur, vote) VALUES (:id_user, :id_acteur, :vote)');
	$vote_post->execute(array('id_user'=>$id_user,'id_acteur'=>$id_acteur, 'vote'=>$vote));

	//if isset($vote)




header('Location:acteurs.php?acteur=' . $id_acteur);

?>