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
 
 
       
       <?php $reponse = $bdd->query('SELECT * FROM Vehicule');
        while ($donnees = $reponse->fetch())
		{
		?>
		
		
		<option>
		<?php
		echo $donnees['id'];
		?>
		</option>
		
		
		<?php
		}
		$reponse->closeCursor();
        ?>
 
   </body>
</html>