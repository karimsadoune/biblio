<?php

$link = mysqli_connect("localhost","root","","monbd") or die ("error".mysqli_error($link));



 if(isset($_POST['enrg']))
{


$titre=$_POST['titre'];
$auteur=$_POST['auteur'];
$edition=$_POST['edition'];


$sql="INSERT INTO livre VALUES (null,'$titre','$auteur','$edition')";

mysqli_query($link,$sql);}

echo '<meta http-equiv="refresh" content="3;URL=index.php">';
?>
<script type="text/javascript">
alert ("le livre a été inseré");
</script>
