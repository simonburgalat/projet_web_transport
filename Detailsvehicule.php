<!DOCTYPE html>

<html>

  <head>

 
  <link rel="stylesheet" type="text/css" href="style.css">
    <title>Connexions</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>

  <body>

    <h1 id='main_titre'>Détails d'un véhicule </h1>
	
<p> Dernière position:</p>
<p> Trajet en cours effectué à ..%</p>
<p>Historique des trajets</p>	
<p>Historique des relevés</p>	
<div id='ajout_course'>
<p> Course : </p><input type="text" >
<p> Date : </p><input type="text" >
   <input type="submit"  value="Ajouter une course" onclick="ajout_course()" >  

</div>


<div id='menu_liens'>
<?php include ("Menuliens.php") ;?>
</div>

</body>

</html>
