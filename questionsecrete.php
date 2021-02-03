<?php 
	include "header.php";


try
{
	$bdd = new PDO('mysql:host=localhost;dbname=gbaf;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$pseudo = $_GET['pseudo'];

$verif_question = $bdd->prepare('SELECT questionsecrete, id_user FROM account WHERE pseudo = :pseudo');
$verif_question->execute(array('pseudo'=>$pseudo));
$retourquestion = $verif_question->fetch();

?>

<div class="pagecentree">
<p class="pseudo_titre">Avant de pouvoir changer de mot de passe, renseignez la réponse à votre question secrète :</p>

<p><?php echo $retourquestion['questionsecrete']; ?></p>

<form action="questionsecrete_post.php" method="post">

		<p>
			<input type="hidden" name="id_user" value="<?php echo $retourquestion['id_user']; ?>"/>
			<label for="reponsesecrete">Réponse à la question secrète</label> : <input type="text" class="champsconnexion" name="reponsesecrete" id="reponsesecrete"/><br/>
			<input type="submit" value="Envoyer" />
		</p>

</form>
</div>
