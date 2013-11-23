<!DOCTYPE html>

<html>

  <head>
	<script type="text/javascript" src="script.js"></script>
	<script type="text/javascript" src="jquery-2.0.3.js"></script>
 	<link rel="stylesheet" type="text/css" href="style.css">
    <title>Connexions</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>


	<body>

    <h1 id='main_titre'>Accueil </h1>
    
	<div id='auth'>
	<table  border="1" >
		<tr>
		<td>
		Login: <input type="text" id="login">
		Password: <input type="text" id="password">
		<input type="submit" id="valider" value="Valider">
		</td>
	
		<td>
		<a href="‪Inscription.php">Créer un compte</a>
		</td>
		</tr>
	</table>
	</div>
	
	<img id='map_main' src="map_main.png" alt="Erreur" >
	
	<div id='menu_liens'>
	<?php include ("Menuliens.php") ;?>
	</div>

	</body>

</html>
