<?php

$link = mysqli_connect("localhost","root","","monbd") or die ("error".mysqli_error($link));
?>

<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style1.css">
   <link rel="icon" type="image/x-icon" href="téléchargement.png">

</head>
<body>
<?php include("header.php"); ?>	

<h2>Liste des Livres</h2>
<table lign="center" >
<tr >
<td style="background-color: #FFFF00">ISBN</td>
<td style="background-color: #FFFF00">Titre</td>
<td style="background-color: #FFFF00">Auteur</td>
<td style="background-color: #FFFF00">Edition</td>	

</tr>
<?php $req="SELECT * FROM livre ";
$res=mysqli_query($link,$req);
while ($row=mysqli_fetch_array($res)) {?>
<tr>

<td><?php echo $row['ISBN']; ?></td>	
<td><?php echo $row['titre']; ?> </td>
<td><?php echo $row['auteur']; ?> </td>
<td><?php echo $row['edition']; ?> </td>

</tr>	
<?php } ?>


</table>

<?php include("footer.php")?>

</body>

</html>