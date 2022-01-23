<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style1.css">
    <link rel="icon" type="image/x-icon" href="téléchargement.png">

</head>

<body>
<?php include("header.php"); ?>	
<h2>Pour Changer le Titre d'un Livre</h2>
<form method="POST" action="modifier.php">
<table align="center">
   <tr>
       <td>ISBN   </td>
       <td> <input type="text" name="ISBN" size="40" > </td>
   </tr>

   <tr>
       <td>Nouveau Titre   </td>
       <td> <input type="text" name="titre" size="40" > </td>
   </tr>

<tr>
	<td></td>
<td><input type="submit" value="Envoyer" name="enrg" >
<input type="reset" value="Supprimer" name="res"></td>
</tr></table>
</form>
<?php include("footer.php")?>

</body>



</html>