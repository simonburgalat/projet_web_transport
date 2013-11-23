<!DOCTYPE html>

<html>

  <head>

 
  <link rel="stylesheet" type="text/css" href="style.css">
    <title>Connexions</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>

  <body>

    <h1 id='main_titre'>Détails d'un chemin </h1>
	<table border="1">
	<tr>
	<td>Arrets</td>
	<td>Courses associées</td>
	<td><input type="button" value="supprimer" onclick="suppr_arret()"></td>
	<td><input type="button" value="ajouter" onclick="ajout_arret()"></td>
	</tr>
	<tr>
	<td>  </td>
	<td>  </td>
	<td>  </td>
	<td>  </td>
	</tr>



<div id='menu_liens'>
<?php include ("Menuliens.php") ;?>
</div>

</body>

</html>
