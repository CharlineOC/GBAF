<!-- session start ? + include header ici -->

<?php 
include "header.php";
 ?>


<section class="sectionpresentation">

	<h1>GBAF: Le Groupement Banque-Assurance Français</h1>

	<div class="presentation">

	<p>
		Le Groupement Banque Assurance Français (GBAF) est une fédération représentant les 6 grands groupes français : 
	</p>
	<p>
		<ul>
       		<li>BNP Paribas</li>
        	<li>BPCE</li>
        	<li>Crédit Agricole</li>
        	<li>Crédit Mutuel-CIC</li>
        	<li>Société Générale</li>
        	<li>La Banque Postale</li>
    	</ul>
	</p>

	<p>
		Même s’il existe une forte concurrence entre ces entités, elles vont toutes travailler de la même façon pour gérer près de 80 millions de comptes sur le territoire national. <br/>
		Le GBAF est le représentant de la profession bancaire et des assureurs sur tous les axes de la réglementation financière française.<br/>
		Sa mission est de promouvoir l'activité bancaire à l’échelle nationale. C’est aussi un interlocuteur privilégié des pouvoirs publics.

	</p>

	</div>

	<img class="img_banque" src="images/banque_de_france.jpg">

</section>

<section class="sectionacteurs">

	<h2>Nos acteurs et partenaires :</h2>

	<?php	

		try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=gbaf;charset=utf8', 'root', '');
			}
		catch(Exception $e)
			{
			        die('Erreur : '.$e->getMessage());
			}

		$getActeur = $bdd->prepare('SELECT * FROM acteurs');
		$getActeur->execute();
		while ($donnees = $getActeur->fetch())
		{
		?>
		

	<div class="acteur">

			<img class="logo_acteur_mini" src="<?php echo $donnees['logo']; ?>">
			<div class="description">
				<h3> <?php echo  $donnees['acteur']; ?> </h3>
				<p class="descriptiontrunc"> <?php echo $donnees['description']; ?> </p>
			</div>
			
			<div class="boutonsuite">
				<a class="liensuite" href="acteurs.php?acteur=<?php echo $donnees['id_acteur']; ?>">Lire la suite</a>
			</div>
		
	</div>

		<?php

		}
		
		$getActeur->closeCursor();

		?>
	

</section>


 <!-- include footer ici -->
<?php
	include "footer.php";
  ?>