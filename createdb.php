
<?php  
$link = mysqli_connect("localhost","root","","monbd") or die ("error".mysqli_error($link));

$sql="CREATE TABLE livre ( ISBN INT(6) AUTO_INCREMENT PRIMARY KEY , titre VARCHAR(20) NOT NULL, auteur VARCHAR(20) NOT NULL, edition INT(4))";

mysqli_query($link,$sql);
echo '<meta http-equiv="refresh" content="3;URL=index.php">';

?>

<script type="text/javascript">
alert("la table 'livre' a été créé");
</script>

