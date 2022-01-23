<?php
$link = mysqli_connect("localhost","root","","monbd") or die ("error".mysqli_error($link));

$titre = $_POST['titre'];
?>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="css/style1.css">
        <link rel="icon" type="image/x-icon" href="téléchargement.png">

</head>
<body>
	<?php 
	include("header.php");
	$req=" SELECT * FROM livre WHERE titre='$titre' ";
    $res=mysqli_query($link,$req);
  if (!mysqli_num_rows($res)) { ?>
<h2>il n'existe pas</h2>
<?php }else {
   while ($row=mysqli_fetch_array($res)) { ?>
<table align="center">	
<tr>
<td style="background-color: #FFFF00" style=" text-align=center" >ISBN :</td>
<td><?php echo $row['ISBN']; ?></td>
</tr>	
<tr>
<td style="background-color: #FFFF00" style=" text-align=center">Titre :</td>	
<td><?php echo $row['titre']; ?> </td>
</tr>
<tr>
<td style="background-color: #FFFF00" style=" text-align=center">Auteur :</td>	
<td><?php echo $row['auteur']; ?> </td>
</tr>
<tr>
<td style="background-color: #FFFF00" style=" text-align=center">Edition :</td>	
<td><?php echo $row['edition']; ?> </td>
</tr>	
<?php } }?>
</table>	

<?php include("footer.php")?>

</body>
</html>