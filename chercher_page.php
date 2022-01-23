<?php include("connect.php"); ?>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="css/style1.css">
        <link rel="icon" type="image/x-icon" href="téléchargement.png">

</head>
<body>
<?php include("header.php"); ?>
<h2>Pour Chercher un Livre</h2>
<form action="chercher.php" method="POST">
<table align="center">
   <tr>
       <td >entrez le nom du livre  </td>
       <td > <input type="text" name="titre" size="40" > </td>
   </tr>

   <tr>
	<td></td>
<td><input type="submit" value="Envoyer" name="enrg" >
<input type="reset" value="Supprimer" name="res"></td>
</tr>

</table>

</form>
<?php include("footer.php")?>

</body>
</html>