<?php
	//On se connecte a la base de données Projet Transport
	debug_print_backtrace() ;
	try
	{
	$bdd = new pdo('mysql:host=localhost;dbname=Projet Transport', 'root', '');
	}
	catch (Exception $e)
	{
        die('Erreur : ' . $e->getMessage());
	}
	
	//on ecrit dans la bdd en recuperant les valeurs du formulaire
	$req = $bdd->prepare("INSERT INTO Chemin(id,Nom) VALUES(?, ?)");
$concat=$_POST['Depart_chemin'].$_POST['Terminus_chemin'] ;
	$req->execute(array($_POST['ID_chemin'], $concat));
	
	
	include ("Cheminstab.php") ;
	 
		$reponse->closeCursor();

	//on redirige directement vers l'accueil
	header('Location: Listechemins.php');
?>