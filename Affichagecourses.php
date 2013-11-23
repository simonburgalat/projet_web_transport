       <?php 
	  
	   //On recupere la base de données Projet Transport
try
{
	$bdd = new pdo('mysql:host=localhost;dbname=Projet Transport', 'root', '');
	}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
	   
	?>  
	  
	<!DOCTYPE html>
<html>
   <head>
       
   </head>
 
   <body>
 
       
       <?php $reponse = $bdd->query('SELECT * FROM Course ORDER BY id');
        while ($donnees = $reponse->fetch())
		{
		?>
		<tr>
		<td>
		<?php
		echo $donnees['Nom'];
		?>
		
		</td>
		<td>
		<?php
		$chem=$donnees['Cheminref_id'];
		$reponse2=$bdd->query('SELECT Nom FROM Chemin WHERE id='.$chem.'');
		while($donnees2=$reponse2->fetch())
		{
		
		echo $donnees2['Nom'];
		}
		?>
		</td>
		<td>
		<?php
	echo $donnees['Heure_debut'];
	echo"-";
		echo $donnees['Heure_fin'];
		?>
		</td>
		
		</tr>
		
		<?php
		}
		$reponse->closeCursor();
        ?>
 
   </body>
</html>