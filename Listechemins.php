<!DOCTYPE html>

<html>

  <head>
  
 
  <link rel="stylesheet" type="text/css" href="style.css">
    <title>Connexions</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>

  <body>

    <h1 id='main_titre'>Liste des lignes</h1>
	

	
<div id='menu_trajets'>
<table  border="1" >

<tr>
<th> Chemins</th>
<th> Courses</th>

</tr>
<tr>
 <?php include("Cheminstab.php")?>   


</tr>


<div id='ajout_chemin'>
<form action="Ajoutchemin.php" method="post">
<p>ID:</p> <input type="text"  id="ID_chemin">
<p>Départ:</p> <input type="text" id="Depart_chemin">
<p>Terminus:</p> <input type="text" id="Terminus_chemin">
<p> <input type="submit" name="new_chemin" value="Ajouter le chemin" </p>
</form>
</div>


</table>
</div>

<div id='menu_liens'>
<?php include ("Menuliens.php") ;?>
</div>


</body>

</html>
