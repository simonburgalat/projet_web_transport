
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


Details dynamiques a ajouter + modifier la BDD je pense pour associer les courses a un vehicules 