<!DOCTYPE html>

<html>

  <head>
 
 
  <link rel="stylesheet" type="text/css" href="style.css">
    <title>Connexions</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>

  <body>

    <h1 id='main_titre'>Accueil </h1>
	
	<img id='map_main' src="map_main.png" alt="Erreur" >
	
	
	<div id='auth'>
Login:  <input type="text"  id="login">
Password: <input type="submit" value="Valider"  onclick="authentification()"/>
 <text id="password"  ></text></p>
</div>
	
	
	
<div id='menu_lien'>
<?php include ("Menu_liens.php") ;?>
</div>




</body>

</html>
