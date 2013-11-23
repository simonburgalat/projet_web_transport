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
 
   <body>
 
 
       
       <?php $reponse = $bdd->query('SELECT * FROM Vehicule ORDER BY id');
        while ($donnees = $reponse->fetch())
		{?>
			<tr>
			<td>
			<?php echo $donnees['id'];?>
			</td>
			<td>
			<?php echo $donnees['Modele'];?>
			</td>
			<td></td>
			<td>   <input type="button" name="details_vehicule" value="Details" onclick="vehicule_details()">
			</td>
			</tr>
		<?php
		}
		$reponse->closeCursor();?>
 
   </body>
</html>