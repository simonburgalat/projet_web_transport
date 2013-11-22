<!DOCTYPE html>

<html>

  <head>
  
 
  <link rel="stylesheet" type="text/css" href="style.css">
    <title>Connexions</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>

  <body>

    <h1 id='main_titre'>Positions et détails des véhicules </h1>
	

	
<div id='menu_vehicules'>
<table  border="1" >
<caption>Véhicules</caption>
<tr>
<th> ID</th>
<th> Type</th>
<th> Position</th>
<th> Ajouter un véhicule</th>
</tr>
<tr>
<td>    </td>
<td>    </td>
<td>    </td>
<td>   <input type="button" name="ajout_vehicule" value="Détails" onclick="détails_vehicule()" >  </td>
</tr>





</table>
</div>

<div id='ajout_vehicule'>
<p>ID:</p> <input type="text"  id="ID_ajout">
<p>Type:</p> <input type="text" id="Type_ajout">
<p> <input type="submit" value="Ajouter le véhicule" onclick="ajout_vehicule()"></p>
</div>



<img id='map_main' src="map_main.png" alt="Erreur" >

<div id='menu_liens'>
<?php include ("Menuliens.php") ;?>
</div>
</body>

</html>
