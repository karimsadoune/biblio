<html>

<head>
    <title>index</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style1.css">
        <link rel="icon" type="image/x-icon" href="téléchargement.png">

</head>

<body>
<?php include("header.php"); ?>

<h2> Ajouter un Livre  </h2>
<form method="POST" action="inserer.php">
  
<table align="center">
   <tr>
       <td>Titre   </td>
       <td> <input class="in1" type="text" name="titre" size="40" > </td>
   </tr>

   <tr>
       <td>Auteur   </td>
       <td> <input type="text" name="auteur" size="40" > </td>
   </tr>

   <tr>
       <td>Edition  </td>
       <td> <input type="text" name="edition" size="40" > </td>
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
