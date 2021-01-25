<!-- session start ? + include header ici -->
<?php 
include "header.php";
 ?>

<?php	

		try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=gbaf;charset=utf8', 'root', '');
			}
		catch(Exception $e)
			{
			        die('Erreur : '.$e->getMessage());
			}
?>

<section class="sectionprésentation">

	<div>
		<?php

			$id_acteur=$_GET['acteur'];

			$detailActeur = $bdd->prepare('SELECT * FROM acteurs WHERE id_acteur = :id_acteur');
			$detailActeur->execute(array('id_acteur'=>$id_acteur));
			$donnees = $detailActeur->fetch();


		?>


		<img class="logo_acteur" src="<?php echo $donnees['logo']; ?>"/>
		<h2><?php echo $donnees['acteur']; ?></h2>
		<p><?php echo $donnees['description']; ?></p>

	</div>
	
		<?php	$detailActeur->closeCursor();   ?>


</section>




<section class="sectioncommentaires">

	<div>
		
		<!-- afficher le nb de commentaires dans ma bdd
			afficher bouton pour commenter
			afficher bouton pour liker

			afficher les derniers commentaires -> afficher pour chaque commentaire le prenom , la date , et le commentaire -->

				<?php

					$nb_comm = $bdd->prepare('SELECT COUNT(*) AS nb_comm FROM commentaires WHERE id_acteur = :id_acteur');
					$nb_comm->execute(array('id_acteur'=>$id_acteur));
					$nb_commentaire = $nb_comm->fetch();

					echo '<p>' . $nb_commentaire['nb_comm'] .  ' commentaires.</p>'


				?>

                <p> les 5 derniers commentaires : </p>

                <?php
                
                    $getCommentaire= $bdd->prepare('SELECT * FROM commentaires WHERE id_acteur = :id_acteur ORDER BY id_post DESC LIMIT 0, 5');
                    $getCommentaire->execute(array('id_acteur'=>$id_acteur));
                    while ($commentaire = $getCommentaire->fetch()) 
                    	{
                        	$id_auteur=$commentaire['id_user'];

                        	$auteur = $bdd->prepare('SELECT prenom FROM account WHERE id_user = :id_user');
                       		$auteur->execute(array('id_user'=>$id_auteur));
                       		$donnees = $auteur->fetch();
                               
                   
                        	echo '<p>' . $donnees['prenom'] . '</p>'; 
                        	echo '<p>' . $commentaire['date_add'] . '</p>';
                        	echo '<p>' . nl2br($commentaire['commentaire']) . '</p>';
        				
        				}

				?>

		
	</div>
	


</section>







 <!-- include footer ici -->
<?php
	include "footer.php";
  ?>