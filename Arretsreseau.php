<!DOCTYPE html>

<html>

  <head>
  
 
  <link rel="stylesheet" type="text/css" href="style.css">
    <title>Connexions</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>

  <body>

    <h1 id='main_titre'>Liste des courses</h1>
	

	
<div id='menu_arrets'>
<table  border="1" >

<tr>
<th> Arrets</th>
<th> Nom</th>
<th> Coordonnées</th>
<th> Chemins</th>
<th> </th>
</tr>
<tr>
<td>    </td>
<td>    </td>
<td>    </td>
<td>    </td>
<td><input type="button" value="Editer" onclick="editer_arret()"    </td>
</tr>

</table>
</div>


<div id='ajout_arrete'>
<p>Nom:</p> <input type="text"  id="arret_nom_ajout()">
<p>Coordonnées:</p> <input type="text" id="arret_coordonnees_ajout">
<p> <input type="submit" value="Ajouter l'arret" onclick="ajout_arret()"></p>
</div>

<div id='suppr_arret'>
<p>Nom:</p> <input type="text"  id="arret_nom_suppr()">
<p> <input type="submit" value="Supprimer l'arret" onclick="suppr_arret()"></p>
</div>



<div id='menu_liens'>
<?php include ("Menuliens.php") ;?>
</div>


</body>

</html>
