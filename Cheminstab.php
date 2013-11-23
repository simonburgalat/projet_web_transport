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
 
 
       
       <?php $reponse = $bdd->query('SELECT * FROM Chemin ORDER BY id');
        while ($donnees = $reponse->fetch())
		{
		?>
		<tr>
		<td>
		<?php
		echo $donnees['id'];
		?>
		
		</td>
		<td>
		<?php
		echo $donnees['Nom'];
		?>
		</td>
		
		<td>   <input type="button" name="details_chemin" value="Détails" onclick="chemin_details()">
		</td>
		</tr>
		
		<?php
		}
		$reponse->closeCursor();
        ?>
 
   </body>
</html>