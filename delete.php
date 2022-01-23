<?php include("connect.php"); ?>
<html>

<head>
<meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="téléchargement.png">

<link rel="stylesheet" href="css/style1.css">
</head>

<body>
<?php include("header.php"); ?>	

<form method="POST" action="supprimer.php">
	<h2>Pour Supprimer un Livre</h2>
	<table align="center">

   <tr>
       <td >ISBN  </td>
       <td > <input type="text" name="ISBN" size="40" > </td>
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